(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [94941],
  {
    16261: (e, s, t) => {
      Promise.resolve().then(t.bind(t, 45818));
    },
    45818: (e, s, t) => {
      "use strict";
      (t.r(s), t.d(s, { default: () => Z }));
      var r = t(70207),
        i = t(87223),
        n = t(50018),
        a = t(68588),
        l = t.n(a),
        o = t(28560),
        c = t(56328),
        d = t(28131),
        m = t(36521),
        x = t(39441),
        p = t(61889),
        u = t(82110),
        h = t(68233);
      function f(e) {
        let { isSpeaking: s, type: t } = e;
        return s
          ? (0, r.jsxs)("div", {
              className:
                "jsx-f2e39fdcbc809f54 relative flex items-center justify-center w-6 h-6",
              children: [
                (0, r.jsx)("div", {
                  style: { animation: "customPulse 1.5s ease-in-out infinite" },
                  className:
                    "jsx-f2e39fdcbc809f54 " +
                    ((0, u.cn)(
                      "absolute w-4 h-4 rounded-full",
                      "user" === t ? "bg-secondary/40" : "bg-primary/40",
                    ) || ""),
                }),
                (0, r.jsx)("div", {
                  className:
                    "jsx-f2e39fdcbc809f54 " +
                    ((0, u.cn)(
                      "relative w-3 h-3 rounded-full z-10",
                      "user" === t ? "bg-secondary" : "bg-primary",
                    ) || ""),
                }),
                (0, r.jsx)(l(), {
                  id: "f2e39fdcbc809f54",
                  children:
                    "@-webkit-keyframes customPulse{0%,100%{opacity:.6;-webkit-transform:scale(1);transform:scale(1)}50%{opacity:.3;-webkit-transform:scale(1.3);transform:scale(1.3)}}@-moz-keyframes customPulse{0%,100%{opacity:.6;-moz-transform:scale(1);transform:scale(1)}50%{opacity:.3;-moz-transform:scale(1.3);transform:scale(1.3)}}@-o-keyframes customPulse{0%,100%{opacity:.6;-o-transform:scale(1);transform:scale(1)}50%{opacity:.3;-o-transform:scale(1.3);transform:scale(1.3)}}@keyframes customPulse{0%,100%{opacity:.6;-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);transform:scale(1)}50%{opacity:.3;-webkit-transform:scale(1.3);-moz-transform:scale(1.3);-o-transform:scale(1.3);transform:scale(1.3)}}",
                }),
              ],
            })
          : null;
      }
      function w(e) {
        let { onCreditsDepleted: s } = e,
          { t: a } = (0, h.ok)(),
          [l, w] = (0, i.useState)({ status: "idle" }),
          [g, y] = (0, i.useState)([]),
          [v, j] = (0, i.useState)(!1),
          [b, N] = (0, i.useState)(!1),
          [k, M] = (0, i.useState)(!1),
          [S, _] = (0, i.useState)(null),
          [I, A] = (0, i.useState)(null),
          [C, T] = (0, i.useState)(!1),
          [P, E] = (0, i.useState)(""),
          [F, D] = (0, i.useState)(0),
          H = (0, i.useRef)(null),
          L = (0, i.useRef)(null),
          O = (0, i.useRef)(null),
          U = (0, i.useRef)(null),
          R = (0, i.useRef)(null),
          W = (0, i.useRef)(null),
          B = (0, i.useRef)(null),
          z = (0, i.useRef)(null),
          G = (0, i.useRef)(null),
          J = (0, i.useRef)(null),
          $ = (0, i.useRef)(null),
          V = (0, i.useCallback)(async (e) => {
            try {
              U.current = new (
                window.AudioContext || window.webkitAudioContext
              )();
              let s = U.current.createMediaStreamSource(e);
              ((R.current = U.current.createAnalyser()),
                (R.current.fftSize = 256),
                (R.current.smoothingTimeConstant = 0.8),
                s.connect(R.current));
              let t = R.current.frequencyBinCount,
                r = new Uint8Array(t),
                i = () => {
                  if (R.current) {
                    R.current.getByteFrequencyData(r);
                    let e = r.reduce((e, s) => e + s, 0) / r.length;
                    N(e > 10);
                  }
                  W.current = requestAnimationFrame(i);
                };
              i();
            } catch (e) {
              console.error("Error setting up audio analysis:", e);
            }
          }, []),
          q = (0, i.useCallback)(() => {
            if (
              (W.current &&
                (cancelAnimationFrame(W.current), (W.current = null)),
              U.current)
            ) {
              try {
                "closed" !== U.current.state && U.current.close();
              } catch (e) {
                console.error("Error closing audio context:", e);
              }
              U.current = null;
            }
            (B.current &&
              (B.current.getTracks().forEach((e) => e.stop()),
              (B.current = null)),
              (R.current = null),
              N(!1));
          }, []),
          Y = (0, i.useCallback)(() => {
            L.current &&
              H.current &&
              (L.current.scrollTop = L.current.scrollHeight);
          }, []);
        (0, i.useEffect)(() => {
          let e = setTimeout(() => {
            Y();
          }, 100);
          return () => clearTimeout(e);
        }, [g, Y]);
        let K = (0, i.useCallback)(
            async (e, s) => {
              if (!l.sessionId) {
                console.warn(
                  "⚠️ Cannot save message: no session ID available yet",
                );
                return;
              }
              try {
                let t = await fetch("/api/interview/voice/messages", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    session_id: l.sessionId,
                    message_type: e,
                    content: s,
                    timestamp: new Date().toISOString(),
                  }),
                });
                if (!t.ok) {
                  let e = await t
                    .json()
                    .catch(() => ({ error: "Unknown error" }));
                  console.error("❌ Failed to save message:", t.status, e);
                  return;
                }
                await t.json();
              } catch (e) {
                console.error("❌ Failed to save message to database:", e);
              }
            },
            [l.sessionId],
          ),
          Q = (0, i.useRef)(null),
          X = (0, i.useCallback)(async () => {
            if (!G.current || !J.current) return;
            let e = Math.floor((Date.now() - J.current) / 1e3);
            if (e >= 1800) {
              (E(a("interview.components.customInterview.timeLimitReached")),
                T(!0),
                Q.current && (await Q.current()));
              return;
            }
            let t = e / 60;
            t >= 25 &&
              t < 30 &&
              _(
                a("interview.components.customInterview.sessionEndingWarning", {
                  minutes: (30 - t).toFixed(1),
                }),
              );
            try {
              let t = await fetch("/api/interview/voice/session/track", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                  sessionId: G.current,
                  durationSeconds: e,
                }),
              });
              if (!t.ok) {
                console.error("Failed to track session usage");
                return;
              }
              let r = await t.json();
              if (r.success) {
                if ((A(r.availableMinutes), r.shouldStop)) {
                  (_(
                    a(
                      "interview.components.customInterview.creditsDepletedWarning",
                    ),
                  ),
                    Q.current && (await Q.current()),
                    setTimeout(() => {
                      null == s || s();
                    }, 500));
                  return;
                }
                e < 1795 &&
                  (r.shouldWarn
                    ? r.availableMinutes < 0.5
                      ? _(
                          a(
                            "interview.components.customInterview.lowCreditsWarning",
                            { minutes: r.availableMinutes.toFixed(1) },
                          ),
                        )
                      : _(
                          a(
                            "interview.components.customInterview.lowCreditsGeneral",
                          ),
                        )
                    : _(null));
              }
            } catch (e) {
              console.error("Error tracking session:", e);
            }
          }, []),
          Z = (0, i.useCallback)(async () => {
            try {
              w((e) => ({ ...e, status: "connecting" }));
              let e = await fetch("/api/voice-ai/session/start", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ agentType: "general" }),
              });
              if (!e.ok) {
                let s = await e.json();
                if (402 === e.status)
                  throw Error(
                    s.message ||
                      "Insufficient credits. Please purchase credits to continue.",
                  );
                throw Error(s.error || "Failed to start session");
              }
              let s = await e.json();
              if (!s.success || !s.session || !s.signedUrl)
                throw Error("Failed to create session or get signed URL");
              let r = s.session.provider,
                i = Date.now();
              ((G.current = s.session.id),
                (J.current = i),
                w((e) => ({
                  ...e,
                  status: "connected",
                  conversationId: s.session.conversationId,
                  signedUrl: s.signedUrl,
                  sessionId: s.session.id,
                  startTime: i,
                })));
              let n = await navigator.mediaDevices.getUserMedia({ audio: !0 });
              if (
                ((B.current = n),
                await V(n),
                j(!0),
                w((e) => ({ ...e, status: "in-call" })),
                "elevenlabs" === r)
              ) {
                let { Conversation: e } = await t
                  .e(84121)
                  .then(t.bind(t, 73999));
                O.current = await e.startSession({
                  signedUrl: s.signedUrl,
                  onConnect: () => {},
                  onDisconnect: () => {
                    ee();
                  },
                  onMessage: (e) => {
                    let s,
                      t =
                        (null == e ? void 0 : e.role) === "user" ||
                        (null == e ? void 0 : e.source) === "user" ||
                        (null == e ? void 0 : e.type) === "user_transcript" ||
                        (null == e ? void 0 : e.is_user) === !0 ||
                        (null == e ? void 0 : e.from) === "user" ||
                        (null == e ? void 0 : e.speaker) === "user";
                    if (
                      (s =
                        "string" == typeof e
                          ? e
                          : (e &&
                              "object" == typeof e &&
                              (e.message ||
                                e.content ||
                                e.text ||
                                e.transcript ||
                                e.value ||
                                e.data)) ||
                            "Message received") &&
                      s.trim()
                    ) {
                      let e = t ? "user" : "ai";
                      (y((t) => [
                        ...t,
                        {
                          id: ""
                            .concat(e, "-")
                            .concat(Date.now(), "-")
                            .concat(Math.random()),
                          type: e,
                          content: s,
                          timestamp: new Date(),
                        },
                      ]),
                        K(e, s));
                    }
                  },
                  onModeChange: (e) => {
                    M(
                      (null == e ? void 0 : e.mode) === "speaking" ||
                        "speaking" === e,
                    );
                  },
                  onError: (e, s) => {
                    (console.error("ElevenLabs conversation error:", e, s),
                      w((s) => ({
                        ...s,
                        status: "error",
                        error: "Failed to connect: ".concat(e),
                      })));
                  },
                });
              } else if ("hume" === r) {
                let e = s.session.id,
                  t = !1,
                  r = new WebSocket(s.signedUrl),
                  i = null,
                  n = [],
                  a = !1;
                r.onopen = () => {
                  ((i = new (
                    window.AudioContext || window.webkitAudioContext
                  )()),
                    r.send(
                      JSON.stringify({
                        type: "session_settings",
                        audio: {
                          encoding: "linear16",
                          channels: 1,
                          sample_rate: 16e3,
                        },
                      }),
                    ),
                    B.current && o(r, B.current));
                };
                let o = (e, s) => {
                  let t = new AudioContext({ sampleRate: 16e3 }),
                    r = t.createMediaStreamSource(s),
                    i = t.createScriptProcessor(4096, 1, 1);
                  (r.connect(i), i.connect(t.destination));
                  let n = 0;
                  ((i.onaudioprocess = (s) => {
                    if (e.readyState === WebSocket.OPEN) {
                      let t = s.inputBuffer.getChannelData(0),
                        r = new Int16Array(t.length);
                      for (let e = 0; e < t.length; e++) {
                        let s = Math.max(-1, Math.min(1, t[e]));
                        r[e] = s < 0 ? 32768 * s : 32767 * s;
                      }
                      let i = new Uint8Array(r.buffer),
                        a = "";
                      for (let e = 0; e < i.length; e += 8192)
                        a += String.fromCharCode(...i.slice(e, e + 8192));
                      let l = btoa(a);
                      (e.send(JSON.stringify({ type: "audio_input", data: l })),
                        n < 3 && n++);
                    }
                  }),
                    (e._audioCleanup = () => {
                      try {
                        (i.disconnect(),
                          r.disconnect(),
                          "closed" !== t.state && t.close());
                      } catch (e) {
                        console.error("Error in audio cleanup:", e);
                      }
                    }));
                };
                r.onmessage = async (s) => {
                  try {
                    var r, l;
                    let o = JSON.parse(s.data),
                      d =
                        o.chat_id ||
                        o.chatId ||
                        o.conversation_id ||
                        o.conversationId ||
                        o.session_id ||
                        o.sessionId;
                    if (d && "string" == typeof d && d.length > 10 && !t) {
                      t = !0;
                      try {
                        let s = await fetch(
                          "/api/interview/voice/session/update-chat-id",
                          {
                            method: "POST",
                            headers: { "Content-Type": "application/json" },
                            body: JSON.stringify({ sessionId: e, chatId: d }),
                          },
                        );
                        if (s.ok) w((e) => ({ ...e, conversationId: d }));
                        else {
                          let e = await s.text();
                          (console.error(
                            "❌ Failed to save chat_id:",
                            s.status,
                            e,
                          ),
                            (t = !1));
                        }
                      } catch (e) {
                        (console.error("❌ Failed to auto-save chat_id:", e),
                          (t = !1));
                      }
                    }
                    if (
                      t ||
                      ("chat_metadata" !== o.type &&
                        "CHAT_METADATA" !== o.type &&
                        "session_metadata" !== o.type)
                    )
                      if (
                        "user_message" === o.type &&
                        (null === (r = o.message) || void 0 === r
                          ? void 0
                          : r.content)
                      )
                        (y((e) => [
                          ...e,
                          {
                            id: "user-"
                              .concat(Date.now(), "-")
                              .concat(Math.random()),
                            type: "user",
                            content: o.message.content,
                            timestamp: new Date(),
                          },
                        ]),
                          K("user", o.message.content));
                      else if (
                        "assistant_message" === o.type &&
                        (null === (l = o.message) || void 0 === l
                          ? void 0
                          : l.content)
                      )
                        (y((e) => [
                          ...e,
                          {
                            id: "ai-"
                              .concat(Date.now(), "-")
                              .concat(Math.random()),
                            type: "ai",
                            content: o.message.content,
                            timestamp: new Date(),
                          },
                        ]),
                          K("ai", o.message.content));
                      else if ("error" === o.type)
                        (console.error("Hume error:", o.code, o.message),
                          w((e) => ({
                            ...e,
                            status: "error",
                            error: "Hume error ("
                              .concat(o.code, "): ")
                              .concat(o.message),
                          })));
                      else if ("audio_output" === o.type && o.data) {
                        if ((M(!0), i))
                          try {
                            let e = atob(o.data),
                              s = new ArrayBuffer(e.length),
                              t = new Uint8Array(s);
                            for (let s = 0; s < e.length; s++)
                              t[s] = e.charCodeAt(s);
                            let r = await i.decodeAudioData(s);
                            (n.push(r), a || c());
                          } catch (e) {
                            console.error("Error decoding audio:", e);
                          }
                      } else "audio_end" === o.type && M(!1);
                    else {
                      let s =
                        o.chat_id ||
                        o.chatId ||
                        o.conversation_id ||
                        o.conversationId;
                      if (s) {
                        t = !0;
                        try {
                          let r = await fetch(
                            "/api/interview/voice/session/update-chat-id",
                            {
                              method: "POST",
                              headers: { "Content-Type": "application/json" },
                              body: JSON.stringify({ sessionId: e, chatId: s }),
                            },
                          );
                          if (r.ok)
                            (await r.json(),
                              w((e) => ({ ...e, conversationId: s })));
                          else {
                            let e = await r.text();
                            (console.error(
                              "❌ API returned error:",
                              r.status,
                              e,
                            ),
                              (t = !1));
                          }
                        } catch (e) {
                          (console.error("❌ Failed to save chat ID:", e),
                            (t = !1));
                        }
                      } else
                        console.error("❌ No chat_id found in metadata:", o);
                    }
                  } catch (e) {
                    console.error("Error parsing Hume message:", e);
                  }
                };
                let c = () => {
                  if (0 === n.length || !i) {
                    a = !1;
                    return;
                  }
                  a = !0;
                  let e = n.shift(),
                    s = i.createBufferSource();
                  ((s.buffer = e),
                    s.connect(i.destination),
                    (s.onended = () => {
                      c();
                    }),
                    s.start(0));
                };
                ((r.onerror = (s) => {
                  (console.error("❌ Hume WebSocket error:", s),
                    console.error("❌ WebSocket readyState:", r.readyState),
                    console.error("❌ Session ID:", e),
                    console.error("❌ Conversation ID:", l.conversationId),
                    w((e) => ({
                      ...e,
                      status: "error",
                      error:
                        "Failed to connect to Hume AI. Please check your connection and try again.",
                    })));
                }),
                  (r.onclose = (e) => {
                    if (r._audioCleanup)
                      try {
                        r._audioCleanup();
                      } catch (e) {
                        console.error("Error cleaning up audio streaming:", e);
                      }
                    if (i && "closed" !== i.state)
                      try {
                        i.close();
                      } catch (e) {
                        console.error(
                          "Error closing playback audio context:",
                          e,
                        );
                      }
                    ee();
                  }),
                  (O.current = r));
              }
              ((z.current = setInterval(() => {
                X();
              }, 1e4)),
                setTimeout(() => {
                  X();
                }, 100),
                ($.current = setInterval(() => {
                  if (J.current) {
                    let e = Math.floor((Date.now() - J.current) / 1e3);
                    D(e);
                  }
                }, 1e3)));
            } catch (e) {
              (console.error("Failed to start interview:", e),
                w((s) => ({
                  ...s,
                  status: "error",
                  error:
                    e instanceof Error
                      ? e.message
                      : "Failed to connect to AI interviewer",
                })));
            }
          }, [V, X]),
          ee = (0, i.useCallback)(async () => {
            let e = l.sessionId,
              s = l.conversationId,
              t = l.startTime;
            (s ||
              (console.warn(
                "⚠️ WARNING: No chat_id was captured during this session!",
              ),
              console.warn(
                "⚠️ This means chat history cannot be retrieved from Hume API",
              )),
              j(!1),
              N(!1),
              M(!1),
              _(null),
              A(null),
              D(0),
              w({ status: "idle" }),
              z.current && (clearInterval(z.current), (z.current = null)),
              $.current && (clearInterval($.current), ($.current = null)));
            let r = O.current;
            if (r) {
              O.current = null;
              try {
                "function" == typeof r.endSession
                  ? r.endSession().catch((e) => {
                      console.error("Error ending ElevenLabs session:", e);
                    })
                  : r instanceof WebSocket
                    ? (r._audioCleanup && r._audioCleanup(), r.close())
                    : "function" == typeof r.close && r.close();
              } catch (e) {
                console.error("Error ending voice conversation:", e);
              }
            }
            (q(),
              e &&
                t &&
                fetch("/api/interview/voice/session/end", {
                  method: "POST",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    sessionId: e,
                    durationSeconds: Math.floor((Date.now() - t) / 1e3),
                    status: "completed",
                  }),
                })
                  .then(async (e) => {
                    if (e.ok) {
                      var s;
                      null === (s = (await e.json()).session) ||
                        void 0 === s ||
                        s.minutesUsed;
                    } else
                      console.error(
                        "Failed to end session on server:",
                        e.status,
                      );
                  })
                  .catch((e) => {
                    console.error("Error ending session (background):", e);
                  }));
          }, [q, l.sessionId, l.conversationId, l.startTime]);
        return (
          (0, i.useEffect)(() => {
            Q.current = ee;
          }, [ee]),
          (0, i.useEffect)(() => {
            let e = async (e) => {
              if (l.sessionId && "in-call" === l.status && l.startTime) {
                let e = Math.floor((Date.now() - l.startTime) / 1e3),
                  s = {
                    sessionId: l.sessionId,
                    durationSeconds: e,
                    status: "interrupted",
                  };
                navigator.sendBeacon(
                  "/api/interview/voice/session/end",
                  new Blob([JSON.stringify(s)], { type: "application/json" }),
                ) ||
                  fetch("/api/interview/voice/session/end", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(s),
                    keepalive: !0,
                  }).catch(console.error);
              }
            };
            return (
              window.addEventListener("beforeunload", e),
              () => {
                window.removeEventListener("beforeunload", e);
              }
            );
          }, [l.sessionId, l.status, l.startTime]),
          (0, i.useEffect)(
            () => () => {
              (z.current && clearInterval(z.current),
                $.current && clearInterval($.current));
              let e = O.current;
              if (e) {
                try {
                  "function" == typeof e.endSession
                    ? e.endSession().catch(console.error)
                    : e instanceof WebSocket
                      ? (e._audioCleanup && e._audioCleanup(), e.close())
                      : "function" == typeof e.close && e.close();
                } catch (e) {
                  console.error("Error cleaning up conversation:", e);
                }
                O.current = null;
              }
              q();
            },
            [q],
          ),
          (0, r.jsxs)("div", {
            className:
              "h-full flex flex-col bg-cream rounded-xl overflow-hidden relative",
            children: [
              (0, r.jsx)("div", {
                className: "sticky top-0 z-50 bg-cream/95 backdrop-blur-sm",
                children: (0, r.jsx)("div", {
                  className: "px-2 sm:px-3 md:px-4 py-2 sm:py-3 md:py-4",
                  children: (0, r.jsxs)("div", {
                    className:
                      "px-3 sm:px-4 md:px-6 lg:px-8 py-3 sm:py-4 md:py-5 lg:py-6 bg-primary rounded-lg sm:rounded-xl md:rounded-2xl shadow-xl border border-primary/20",
                    children: [
                      (0, r.jsxs)("div", {
                        className: "flex flex-col gap-3 sm:gap-4",
                        children: [
                          (0, r.jsxs)("div", {
                            className:
                              "flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 sm:gap-3",
                            children: [
                              (0, r.jsx)("div", {
                                className:
                                  "flex items-center gap-2 sm:gap-3 min-w-0 flex-1",
                                children: v
                                  ? (0, r.jsxs)(r.Fragment, {
                                      children: [
                                        (0, r.jsx)("div", {
                                          className: (0, u.cn)(
                                            "w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-all duration-200 flex-shrink-0",
                                            b
                                              ? "bg-secondary/20 border border-secondary/30"
                                              : k
                                                ? "bg-white border border-white/30 p-1"
                                                : "bg-white/10 border border-white/20",
                                          ),
                                          children: k
                                            ? (0, r.jsx)(n.default, {
                                                src: "/logo-icon.webp",
                                                alt: "Azubi",
                                                width: 20,
                                                height: 20,
                                                className:
                                                  "rounded-sm sm:w-6 sm:h-6",
                                              })
                                            : (0, r.jsx)(o.A, {
                                                className:
                                                  "w-4 h-4 sm:w-5 sm:h-5 text-white",
                                              }),
                                        }),
                                        (0, r.jsxs)("div", {
                                          className:
                                            "hidden xs:flex items-center gap-2",
                                          children: [
                                            (0, r.jsx)(f, {
                                              isSpeaking: b,
                                              type: "user",
                                            }),
                                            (0, r.jsx)(f, {
                                              isSpeaking: k,
                                              type: "ai",
                                            }),
                                          ],
                                        }),
                                        (0, r.jsx)("span", {
                                          className: (0, u.cn)(
                                            "text-xs sm:text-sm font-semibold transition-all duration-200 truncate",
                                            b
                                              ? "text-white"
                                              : k
                                                ? "text-white/90"
                                                : "text-white/70",
                                          ),
                                          children: b
                                            ? a(
                                                "interview.components.customInterview.youAreSpeaking",
                                              )
                                            : k
                                              ? a(
                                                  "interview.components.customInterview.aiResponding",
                                                )
                                              : a(
                                                  "interview.components.customInterview.listening",
                                                ),
                                        }),
                                      ],
                                    })
                                  : (0, r.jsxs)(r.Fragment, {
                                      children: [
                                        (0, r.jsx)(c.A, {
                                          className:
                                            "w-4 h-4 sm:w-5 sm:h-5 text-white/50 flex-shrink-0",
                                        }),
                                        (0, r.jsx)("span", {
                                          className:
                                            "text-xs sm:text-sm text-white/50",
                                          children: a(
                                            "interview.components.customInterview.readyToStart",
                                          ),
                                        }),
                                      ],
                                    }),
                              }),
                              v &&
                                (0, r.jsxs)("div", {
                                  className:
                                    "flex items-center gap-2 sm:gap-4 text-xs text-white/80 ml-9 sm:ml-0",
                                  children: [
                                    (0, r.jsxs)("div", {
                                      className:
                                        "flex items-center gap-1 sm:gap-1.5",
                                      children: [
                                        (0, r.jsx)(d.A, {
                                          className:
                                            "w-3 h-3 sm:w-3.5 sm:h-3.5 flex-shrink-0",
                                        }),
                                        (0, r.jsx)("span", {
                                          className:
                                            "font-medium whitespace-nowrap",
                                          children: (function (e) {
                                            let s = Math.floor(e / 60);
                                            return ""
                                              .concat(s, ":")
                                              .concat(
                                                (e % 60)
                                                  .toString()
                                                  .padStart(2, "0"),
                                              );
                                          })(F),
                                        }),
                                      ],
                                    }),
                                    null !== I &&
                                      (0, r.jsx)("div", {
                                        className:
                                          "flex items-center gap-1 sm:gap-1.5",
                                        children: (0, r.jsx)("span", {
                                          className: (0, u.cn)(
                                            "font-medium whitespace-nowrap",
                                            I < 0.5
                                              ? "text-red-300"
                                              : I < 1
                                                ? "text-orange-300"
                                                : "text-white/80",
                                          ),
                                          children: a(
                                            "interview.components.customInterview.minutesLeft",
                                            { minutes: I.toFixed(1) },
                                          ),
                                        }),
                                      }),
                                  ],
                                }),
                            ],
                          }),
                          (0, r.jsxs)("div", {
                            className:
                              "flex items-center justify-between gap-2 sm:gap-3",
                            children: [
                              (0, r.jsxs)("div", {
                                className:
                                  "px-2 sm:px-3 py-1 sm:py-1.5 bg-white/10 rounded-full text-xs font-medium text-white/80 border border-white/20 whitespace-nowrap",
                                children: [
                                  (0, r.jsx)("span", {
                                    className: "hidden sm:inline",
                                    children: a(
                                      "interview.components.customInterview.messagesCount",
                                      { count: g.length },
                                    ),
                                  }),
                                  (0, r.jsx)("span", {
                                    className: "sm:hidden",
                                    children: a(
                                      "interview.components.customInterview.messagesCountShort",
                                      { count: g.length },
                                    ),
                                  }),
                                ],
                              }),
                              "idle" === l.status
                                ? (0, r.jsxs)(x.$, {
                                    onClick: Z,
                                    className:
                                      "bg-secondary hover:bg-secondary/90 text-white border border-secondary/30 shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-xs sm:text-sm md:text-base px-3 sm:px-4 md:px-6 py-2 sm:py-2.5 rounded-full h-auto",
                                    children: [
                                      (0, r.jsx)(c.A, {
                                        className:
                                          "w-3.5 h-3.5 sm:w-4 sm:h-4 md:w-5 md:h-5 mr-1.5 sm:mr-2 flex-shrink-0",
                                      }),
                                      (0, r.jsx)("span", {
                                        className: "hidden xs:inline",
                                        children: a(
                                          "interview.components.customInterview.startInterview",
                                        ),
                                      }),
                                      (0, r.jsx)("span", {
                                        className: "xs:hidden",
                                        children: a(
                                          "interview.components.customInterview.start",
                                        ),
                                      }),
                                    ],
                                  })
                                : "in-call" === l.status
                                  ? (0, r.jsxs)(x.$, {
                                      onClick: ee,
                                      className:
                                        "bg-red-500 hover:bg-red-600 text-white border border-red-400/30 shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-xs sm:text-sm md:text-base px-3 sm:px-4 md:px-6 py-2 sm:py-2.5 rounded-full h-auto",
                                      children: [
                                        (0, r.jsx)(m.A, {
                                          className:
                                            "w-3.5 h-3.5 sm:w-4 sm:h-4 md:w-5 md:h-5 mr-1.5 sm:mr-2 flex-shrink-0",
                                        }),
                                        (0, r.jsx)("span", {
                                          className: "hidden xs:inline",
                                          children: a(
                                            "interview.components.customInterview.endInterview",
                                          ),
                                        }),
                                        (0, r.jsx)("span", {
                                          className: "xs:hidden",
                                          children: a(
                                            "interview.components.customInterview.end",
                                          ),
                                        }),
                                      ],
                                    })
                                  : (0, r.jsxs)(x.$, {
                                      disabled: !0,
                                      className:
                                        "bg-white/10 text-white/70 border border-white/20 text-xs sm:text-sm md:text-base px-3 sm:px-4 md:px-6 py-2 sm:py-2.5 rounded-full h-auto",
                                      children: [
                                        (0, r.jsx)("div", {
                                          className:
                                            "w-3.5 h-3.5 sm:w-4 sm:h-4 md:w-5 md:h-5 mr-1.5 sm:mr-2 animate-spin border-2 border-current border-t-transparent rounded-full flex-shrink-0",
                                        }),
                                        (0, r.jsx)("span", {
                                          className: "hidden xs:inline",
                                          children:
                                            "connecting" === l.status
                                              ? a(
                                                  "interview.components.customInterview.connecting",
                                                )
                                              : a(
                                                  "interview.components.customInterview.pleaseWait",
                                                ),
                                        }),
                                        (0, r.jsx)("span", {
                                          className: "xs:hidden",
                                          children: "...",
                                        }),
                                      ],
                                    }),
                            ],
                          }),
                        ],
                      }),
                      l.error &&
                        (0, r.jsx)("div", {
                          className:
                            "mt-2 sm:mt-3 md:mt-4 p-2 sm:p-3 md:p-4 bg-red-50 border border-red-200 rounded-lg sm:rounded-xl",
                          children: (0, r.jsx)("p", {
                            className:
                              "text-xs sm:text-sm font-medium text-red-700",
                            children: l.error,
                          }),
                        }),
                      S &&
                        (0, r.jsxs)("div", {
                          className: (0, u.cn)(
                            "mt-2 sm:mt-3 md:mt-4 p-2 sm:p-3 md:p-4 border rounded-lg sm:rounded-xl",
                            null !== I && I < 0.5
                              ? "bg-red-50 border-red-300"
                              : "bg-orange-50 border-orange-300",
                          ),
                          children: [
                            (0, r.jsx)("p", {
                              className: (0, u.cn)(
                                "text-xs sm:text-sm font-medium",
                                null !== I && I < 0.5
                                  ? "text-red-700"
                                  : "text-orange-700",
                              ),
                              children: S,
                            }),
                            null !== I &&
                              (0, r.jsx)("p", {
                                className:
                                  "text-xs mt-1 sm:mt-2 text-muted-foreground",
                                children: a(
                                  "interview.components.customInterview.minutesRemaining",
                                  { minutes: I.toFixed(2) },
                                ),
                              }),
                          ],
                        }),
                    ],
                  }),
                }),
              }),
              (0, r.jsx)("div", {
                ref: L,
                className:
                  "flex-1 overflow-y-auto px-2 sm:px-3 md:px-4 lg:px-6 py-3 sm:py-4 md:py-6 scrollbar-thin scrollbar-thumb-primary scrollbar-track-transparent",
                children:
                  0 === g.length
                    ? (0, r.jsx)("div", {
                        className:
                          "h-full flex items-center justify-center px-3",
                        children: (0, r.jsxs)("div", {
                          className: "text-center max-w-md",
                          children: [
                            (0, r.jsx)("div", {
                              className:
                                "w-20 h-20 sm:w-24 sm:h-24 mx-auto mb-4 sm:mb-6 bg-beige rounded-full flex items-center justify-center",
                              children: (0, r.jsx)(c.A, {
                                className:
                                  "w-8 h-8 sm:w-10 sm:h-10 text-primary",
                              }),
                            }),
                            (0, r.jsx)("h3", {
                              className:
                                "text-base sm:text-lg font-semibold text-secondary mb-2",
                              children: a(
                                "interview.components.customInterview.emptyStateTitle",
                              ),
                            }),
                            (0, r.jsx)("p", {
                              className:
                                "text-muted-foreground text-xs sm:text-sm leading-relaxed px-2",
                              children: a(
                                "interview.components.customInterview.emptyStateDescription",
                              ),
                            }),
                          ],
                        }),
                      })
                    : (0, r.jsxs)("div", {
                        className: "space-y-3 sm:space-y-4 pb-3 sm:pb-4",
                        children: [
                          g.map((e, s) => {
                            let t = "user" === e.type;
                            return (0, r.jsxs)(
                              "div",
                              {
                                className: (0, u.cn)(
                                  "flex gap-2 sm:gap-3 md:gap-4 animate-in fade-in-50 slide-in-from-bottom-2 duration-300",
                                  t ? "flex-row-reverse" : "flex-row",
                                ),
                                children: [
                                  (0, r.jsx)("div", {
                                    className: (0, u.cn)(
                                      "w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-xl sm:rounded-2xl flex items-center justify-center shadow-lg flex-shrink-0 border-2",
                                      t
                                        ? "bg-primary border-primary/50"
                                        : "bg-white border-border p-1 sm:p-1.5",
                                    ),
                                    children: t
                                      ? (0, r.jsx)(o.A, {
                                          className:
                                            "w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-white",
                                        })
                                      : (0, r.jsx)(n.default, {
                                          src: "/logo-icon.webp",
                                          alt: "Azubi",
                                          width: 24,
                                          height: 24,
                                          className:
                                            "rounded-sm sm:w-7 sm:h-7 md:w-8 md:h-8",
                                        }),
                                  }),
                                  (0, r.jsxs)("div", {
                                    className: (0, u.cn)(
                                      "flex-1 max-w-[85%] sm:max-w-[80%] md:max-w-[75%]",
                                      t ? "text-right" : "text-left",
                                    ),
                                    children: [
                                      (0, r.jsx)("div", {
                                        className: (0, u.cn)(
                                          "inline-block px-3 py-2 sm:px-4 sm:py-3 md:px-5 md:py-4 shadow-lg border",
                                          t
                                            ? "bg-primary text-white rounded-2xl sm:rounded-3xl rounded-br-md sm:rounded-br-lg border-primary/30"
                                            : "bg-white border-border text-secondary rounded-2xl sm:rounded-3xl rounded-bl-md sm:rounded-bl-lg",
                                        ),
                                        children: (0, r.jsx)("p", {
                                          className:
                                            "text-xs sm:text-sm leading-relaxed break-words",
                                          children: e.content,
                                        }),
                                      }),
                                      (0, r.jsx)("div", {
                                        className: (0, u.cn)(
                                          "mt-0.5 sm:mt-1 text-xs text-muted-foreground px-1",
                                          t ? "text-right" : "text-left",
                                        ),
                                        children:
                                          e.timestamp.toLocaleTimeString([], {
                                            hour: "2-digit",
                                            minute: "2-digit",
                                          }),
                                      }),
                                    ],
                                  }),
                                ],
                              },
                              e.id,
                            );
                          }),
                          (0, r.jsx)("div", { ref: H }),
                        ],
                      }),
              }),
              (0, r.jsx)(p.lG, {
                open: C,
                onOpenChange: T,
                children: (0, r.jsxs)(p.Cf, {
                  className: "sm:max-w-md",
                  children: [
                    (0, r.jsxs)(p.c7, {
                      children: [
                        (0, r.jsxs)(p.L3, {
                          className: "flex items-center gap-2",
                          children: [
                            (0, r.jsx)(d.A, {
                              className: "w-5 h-5 text-primary",
                            }),
                            a(
                              "interview.components.customInterview.timeLimitModalTitle",
                            ),
                          ],
                        }),
                        (0, r.jsx)(p.rr, {
                          className: "text-base pt-2",
                          children: P,
                        }),
                      ],
                    }),
                    (0, r.jsx)(p.Es, {
                      className: "sm:justify-center",
                      children: (0, r.jsx)(x.$, {
                        onClick: () => T(!1),
                        className:
                          "rounded-full bg-primary hover:bg-primary/90",
                        children: a(
                          "interview.components.customInterview.gotIt",
                        ),
                      }),
                    }),
                  ],
                }),
              }),
            ],
          })
        );
      }
      var g = t(63290),
        y = t(79024);
      function v(e) {
        let { className: s, onUpdate: t, compact: n = !1 } = e,
          { t: a } = (0, h.ok)(),
          [l, o] = (0, i.useState)(null),
          [c, m] = (0, i.useState)(!0),
          [x, p] = (0, i.useState)(null),
          f = async () => {
            try {
              let e = await fetch("/api/interview/voice/balance");
              if (!e.ok) throw Error("Failed to fetch balance");
              let s = await e.json();
              s.success &&
                s.balance &&
                (o(s.balance), null == t || t(s.balance));
            } catch (e) {
              (console.error("Error fetching balance:", e),
                p("Failed to load balance"));
            } finally {
              m(!1);
            }
          };
        if (
          ((0, i.useEffect)(() => {
            f();
          }, []),
          c)
        )
          return (0, r.jsxs)("div", {
            className: (0, u.cn)(
              "animate-pulse bg-card rounded-lg p-4 border border-border",
              s,
            ),
            children: [
              (0, r.jsx)("div", {
                className: "h-4 bg-beige rounded w-24 mb-2",
              }),
              (0, r.jsx)("div", { className: "h-8 bg-beige rounded w-16" }),
            ],
          });
        if (x || !l) return null;
        let w = l.available_minutes,
          v = w < 1,
          j = w < 0.5;
        return n
          ? (0, r.jsxs)("div", {
              className: (0, u.cn)("flex items-center gap-2", s),
              children: [
                (0, r.jsx)(d.A, {
                  className: (0, u.cn)(
                    "w-4 h-4",
                    j ? "text-red-500" : v ? "text-orange-500" : "text-primary",
                  ),
                }),
                (0, r.jsxs)("span", {
                  className: (0, u.cn)(
                    "font-semibold text-sm",
                    j
                      ? "text-red-500"
                      : v
                        ? "text-orange-500"
                        : "text-secondary",
                  ),
                  children: [w.toFixed(1), " ", a("interview.credits.min")],
                }),
              ],
            })
          : (0, r.jsxs)("div", {
              className: (0, u.cn)(
                "bg-card rounded-xl p-6 border border-border shadow-sm",
                s,
              ),
              children: [
                (0, r.jsxs)("div", {
                  className: "flex items-start justify-between mb-4",
                  children: [
                    (0, r.jsxs)("div", {
                      children: [
                        (0, r.jsxs)("div", {
                          className: "flex items-center gap-2 mb-1",
                          children: [
                            (0, r.jsx)(d.A, {
                              className: "w-4 h-4 text-primary",
                            }),
                            (0, r.jsx)("h3", {
                              className: "font-medium text-secondary text-sm",
                              children: a("interview.credits.availableMinutes"),
                            }),
                          ],
                        }),
                        (0, r.jsxs)("div", {
                          className: "flex items-baseline gap-2",
                          children: [
                            (0, r.jsx)("span", {
                              className: (0, u.cn)(
                                "text-3xl font-bold",
                                j
                                  ? "text-red-500"
                                  : v
                                    ? "text-orange-500"
                                    : "text-secondary",
                              ),
                              children: w.toFixed(1),
                            }),
                            (0, r.jsx)("span", {
                              className: "text-sm text-muted-foreground",
                              children: a("interview.credits.minutes"),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsx)("div", {
                      className: (0, u.cn)(
                        "p-3 rounded-full",
                        j ? "bg-red-100" : v ? "bg-orange-100" : "bg-beige",
                      ),
                      children:
                        j || v
                          ? (0, r.jsx)(g.A, {
                              className: (0, u.cn)(
                                "w-5 h-5",
                                j ? "text-red-500" : "text-orange-500",
                              ),
                            })
                          : (0, r.jsx)(y.A, {
                              className: "w-5 h-5 text-primary",
                            }),
                    }),
                  ],
                }),
                v &&
                  (0, r.jsx)("div", {
                    className: (0, u.cn)(
                      "text-xs p-2 rounded-lg mb-3",
                      j
                        ? "bg-red-50 text-red-700"
                        : "bg-orange-50 text-orange-700",
                    ),
                    children: a(
                      j
                        ? "interview.credits.almostOut"
                        : "interview.credits.runningLow",
                    ),
                  }),
                (0, r.jsxs)("div", {
                  className:
                    "grid grid-cols-2 gap-4 pt-4 border-t border-border",
                  children: [
                    (0, r.jsxs)("div", {
                      children: [
                        (0, r.jsx)("p", {
                          className: "text-xs text-muted-foreground mb-1",
                          children: a("interview.credits.thisMonth").replace(
                            ":",
                            "",
                          ),
                        }),
                        (0, r.jsxs)("p", {
                          className: "text-sm font-semibold text-secondary",
                          children: [
                            l.current_month_sessions,
                            " ",
                            a("interview.credits.sessions"),
                          ],
                        }),
                        (0, r.jsxs)("p", {
                          className: "text-xs text-muted-foreground",
                          children: [
                            l.current_month_minutes.toFixed(1),
                            " ",
                            a("interview.credits.min"),
                            " used",
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("div", {
                      children: [
                        (0, r.jsx)("p", {
                          className: "text-xs text-muted-foreground mb-1",
                          children: a("interview.credits.allTime").replace(
                            ":",
                            "",
                          ),
                        }),
                        (0, r.jsxs)("p", {
                          className: "text-sm font-semibold text-secondary",
                          children: [
                            l.total_sessions,
                            " ",
                            a("interview.credits.sessions"),
                          ],
                        }),
                        (0, r.jsxs)("p", {
                          className: "text-xs text-muted-foreground",
                          children: [
                            l.total_minutes_used.toFixed(1),
                            " ",
                            a("interview.credits.min"),
                            " used",
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              ],
            });
      }
      var j = t(67739),
        b = t(7535),
        N = t(51105),
        k = t(31159),
        M = t(54308);
      let S = [
        {
          slug: "interview-voice-starter",
          name: "Starter Pack",
          minutes: 25,
          price: 4.99,
          features: [
            "minutesTotal",
            "neverExpires",
            "fullVoiceFeatures",
            "detailedFeedback",
          ],
        },
        {
          slug: "interview-voice-basic",
          name: "Basic Pack",
          minutes: 60,
          price: 9.99,
          features: [
            "minutesTotal",
            "neverExpires",
            "fullVoiceFeatures",
            "detailedFeedback",
            "prioritySupport",
          ],
          popular: !0,
        },
        {
          slug: "interview-voice-pro",
          name: "Pro Pack",
          minutes: 100,
          price: 14.99,
          features: [
            "minutesTotal",
            "neverExpires",
            "fullVoiceFeatures",
            "detailedFeedback",
            "prioritySupport",
            "advancedAnalytics",
          ],
        },
      ];
      function _(e) {
        let { open: s, onOpenChange: t, onSuccess: n, isDepleted: a = !1 } = e,
          { t: l } = (0, h.ok)(),
          [o, c] = (0, i.useState)(null),
          [m, f] = (0, i.useState)(null),
          w = async (e) => {
            (c(e), f(null));
            try {
              let s = await fetch("/api/interview/voice/purchase", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ packageSlug: e }),
              });
              if (!s.ok) {
                let e = await s.json();
                throw Error(e.error || "Failed to create checkout session");
              }
              let { sessionId: t } = await s.json(),
                r = await (0, M.Cv)();
              if (!r) throw Error("Stripe failed to load");
              let { error: i } = await r.redirectToCheckout({ sessionId: t });
              if (i) throw Error(i.message);
            } catch (e) {
              (console.error("Purchase error:", e),
                f(
                  e instanceof Error ? e.message : "Failed to process purchase",
                ),
                c(null));
            }
          };
        return (0, r.jsx)(p.lG, {
          open: s,
          onOpenChange: t,
          children: (0, r.jsxs)(p.Cf, {
            className:
              "!max-w-[min(1400px,95vw)] w-full max-h-[90vh] overflow-y-auto",
            children: [
              (0, r.jsxs)(p.c7, {
                children: [
                  (0, r.jsxs)(p.L3, {
                    className: "flex items-center gap-2",
                    children: [
                      (0, r.jsx)(g.A, { className: "w-5 h-5 text-primary" }),
                      a
                        ? l("interview.components.purchaseModal.titleDepleted")
                        : l("interview.components.purchaseModal.title"),
                    ],
                  }),
                  (0, r.jsx)(p.rr, {
                    children: a
                      ? l(
                          "interview.components.purchaseModal.descriptionDepleted",
                        )
                      : l("interview.components.purchaseModal.description"),
                  }),
                ],
              }),
              a &&
                (0, r.jsx)("div", {
                  className:
                    "bg-beige border border-primary/20 rounded-lg p-4 mb-2",
                  children: (0, r.jsxs)("div", {
                    className: "flex items-start gap-3",
                    children: [
                      (0, r.jsx)("div", {
                        className:
                          "flex-shrink-0 w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center",
                        children: (0, r.jsx)(j.A, {
                          className: "w-5 h-5 text-primary",
                        }),
                      }),
                      (0, r.jsxs)("div", {
                        className: "flex-1",
                        children: [
                          (0, r.jsx)("h4", {
                            className:
                              "font-semibold text-secondary text-sm mb-1",
                            children: l(
                              "interview.components.purchaseModal.trialComplete",
                            ),
                          }),
                          (0, r.jsx)("p", {
                            className:
                              "text-xs text-muted-foreground leading-relaxed",
                            children: l(
                              "interview.components.purchaseModal.trialCompleteDescription",
                            ),
                          }),
                        ],
                      }),
                    ],
                  }),
                }),
              m &&
                (0, r.jsx)("div", {
                  className:
                    "bg-red-50 border border-red-200 rounded-lg p-3 text-sm text-red-700",
                  children: m,
                }),
              (0, r.jsx)("div", {
                className: "grid md:grid-cols-3 gap-4 mt-4",
                children: S.map((e) =>
                  (0, r.jsxs)(
                    "div",
                    {
                      className: (0, u.cn)(
                        "relative bg-card rounded-xl border-2 p-6 transition-all hover:shadow-lg flex flex-col",
                        e.popular
                          ? "border-primary shadow-md"
                          : "border-border",
                      ),
                      children: [
                        e.popular &&
                          (0, r.jsx)("div", {
                            className:
                              "absolute -top-3 left-1/2 -translate-x-1/2",
                            children: (0, r.jsxs)("div", {
                              className:
                                "bg-primary text-white text-xs font-semibold px-3 py-1 rounded-full flex items-center gap-1",
                              children: [
                                (0, r.jsx)(b.A, { className: "w-3 h-3" }),
                                l(
                                  "interview.components.purchaseModal.bestValue",
                                ),
                              ],
                            }),
                          }),
                        (0, r.jsxs)("div", {
                          className: "text-center mb-4",
                          children: [
                            (0, r.jsx)("h3", {
                              className:
                                "font-bold text-lg text-secondary mb-1",
                              children: l(
                                "interview.components.purchaseModal.packages.".concat(
                                  e.slug,
                                ),
                              ),
                            }),
                            (0, r.jsxs)("div", {
                              className:
                                "flex items-center justify-center gap-1 text-primary mb-2",
                              children: [
                                (0, r.jsx)(d.A, { className: "w-4 h-4" }),
                                (0, r.jsx)("span", {
                                  className: "text-2xl font-bold",
                                  children: e.minutes,
                                }),
                                (0, r.jsx)("span", {
                                  className: "text-sm",
                                  children: l(
                                    "interview.components.purchaseModal.minutesLabel",
                                  ),
                                }),
                              ],
                            }),
                            (0, r.jsxs)("div", {
                              className: "text-3xl font-bold text-secondary",
                              children: [
                                "$",
                                e.price,
                                (0, r.jsx)("span", {
                                  className:
                                    "text-sm text-muted-foreground font-normal",
                                  children: " USD",
                                }),
                              ],
                            }),
                            (0, r.jsx)("p", {
                              className: "text-xs text-muted-foreground mt-1",
                              children: l(
                                "interview.components.purchaseModal.perMinute",
                                { price: (e.price / e.minutes).toFixed(2) },
                              ),
                            }),
                          ],
                        }),
                        (0, r.jsx)("ul", {
                          className: "space-y-2 mb-6 flex-grow",
                          children: e.features.map((s, t) =>
                            (0, r.jsxs)(
                              "li",
                              {
                                className: "flex items-start gap-2 text-sm",
                                children: [
                                  (0, r.jsx)(N.A, {
                                    className:
                                      "w-4 h-4 text-primary mt-0.5 flex-shrink-0",
                                  }),
                                  (0, r.jsx)("span", {
                                    className: "text-muted-foreground",
                                    children:
                                      "minutesTotal" === s
                                        ? l(
                                            "interview.components.purchaseModal.features.minutesTotal",
                                            { minutes: e.minutes },
                                          )
                                        : l(
                                            "interview.components.purchaseModal.features.".concat(
                                              s,
                                            ),
                                          ),
                                  }),
                                ],
                              },
                              t,
                            ),
                          ),
                        }),
                        (0, r.jsx)(x.$, {
                          onClick: () => w(e.slug),
                          disabled: !!o,
                          className: "w-full rounded-full mt-auto",
                          variant: e.popular ? "default" : "outline",
                          children:
                            o === e.slug
                              ? (0, r.jsxs)(r.Fragment, {
                                  children: [
                                    (0, r.jsx)(k.A, {
                                      className: "w-4 h-4 mr-2 animate-spin",
                                    }),
                                    l(
                                      "interview.components.purchaseModal.processing",
                                    ),
                                  ],
                                })
                              : l(
                                  "interview.components.purchaseModal.buyButton",
                                  { minutes: e.minutes },
                                ),
                        }),
                      ],
                    },
                    e.slug,
                  ),
                ),
              }),
              (0, r.jsxs)("div", {
                className: "mt-6 p-4 bg-beige rounded-lg border border-border",
                children: [
                  (0, r.jsx)("h4", {
                    className: "font-semibold text-sm text-secondary mb-2",
                    children: l(
                      "interview.components.purchaseModal.securePaymentTitle",
                    ),
                  }),
                  (0, r.jsx)("p", {
                    className: "text-xs text-muted-foreground",
                    children: l(
                      "interview.components.purchaseModal.securePayment",
                    ),
                  }),
                ],
              }),
            ],
          }),
        });
      }
      var I = t(95992),
        A = t(20468);
      function C(e) {
        let { className: s } = e,
          { t } = (0, h.ok)(),
          [n, a] = (0, i.useState)(null),
          [l, o] = (0, i.useState)(null),
          [c, d] = (0, i.useState)(!1),
          [m, p] = (0, i.useState)(!1),
          [f, g] = (0, i.useState)(null);
        return (
          (0, i.useEffect)(() => {
            null !== n && n <= 0
              ? g(t("interview.credits.noMinutes"))
              : null !== n && n > 0 && g(null);
          }, [n, t]),
          (0, r.jsxs)("div", {
            className: (0, u.cn)("space-y-4", s),
            children: [
              (0, r.jsx)("div", {
                className: "hidden",
                children: (0, r.jsx)(v, {
                  onUpdate: (e) => {
                    (a(e.available_minutes), o(e));
                  },
                }),
              }),
              (0, r.jsx)("div", {
                className:
                  "bg-card rounded-xl p-3 sm:p-4 md:p-6 border border-border shadow-sm",
                children: (0, r.jsxs)("div", {
                  className:
                    "flex flex-col lg:flex-row items-start lg:items-center gap-4 sm:gap-6 lg:gap-8",
                  children: [
                    (0, r.jsx)("div", {
                      className: "flex-1 w-full",
                      children:
                        null === n
                          ? (0, r.jsxs)("div", {
                              className: "animate-pulse",
                              children: [
                                (0, r.jsx)("div", {
                                  className: "mb-1",
                                  children: (0, r.jsx)("div", {
                                    className:
                                      "h-3 sm:h-4 bg-beige rounded w-24 sm:w-32 mb-2",
                                  }),
                                }),
                                (0, r.jsxs)("div", {
                                  className:
                                    "flex items-baseline gap-2 mb-2 sm:mb-3",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "h-8 sm:h-10 bg-beige rounded w-20 sm:w-24",
                                    }),
                                    (0, r.jsx)("div", {
                                      className:
                                        "h-3 sm:h-4 bg-beige rounded w-12 sm:w-16",
                                    }),
                                  ],
                                }),
                                (0, r.jsxs)("div", {
                                  className:
                                    "flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6",
                                  children: [
                                    (0, r.jsx)("div", {
                                      className:
                                        "h-3 bg-beige rounded w-32 sm:w-40",
                                    }),
                                    (0, r.jsx)("div", {
                                      className:
                                        "hidden sm:block h-3 bg-beige rounded w-40",
                                    }),
                                  ],
                                }),
                              ],
                            })
                          : (0, r.jsx)("div", {
                              className: "flex items-start justify-between",
                              children: (0, r.jsxs)("div", {
                                className: "w-full",
                                children: [
                                  (0, r.jsx)("div", {
                                    className: "mb-1",
                                    children: (0, r.jsx)("h3", {
                                      className:
                                        "font-medium text-secondary text-xs sm:text-sm",
                                      children: t(
                                        "interview.credits.availableMinutes",
                                      ),
                                    }),
                                  }),
                                  (0, r.jsxs)("div", {
                                    className:
                                      "flex items-baseline gap-1.5 sm:gap-2 mb-2 sm:mb-3",
                                    children: [
                                      (0, r.jsx)("span", {
                                        className: (0, u.cn)(
                                          "text-3xl sm:text-4xl font-bold",
                                          n < 0.5
                                            ? "text-red-500"
                                            : n < 1
                                              ? "text-orange-500"
                                              : "text-secondary",
                                        ),
                                        children: n.toFixed(1),
                                      }),
                                      (0, r.jsx)("span", {
                                        className:
                                          "text-xs sm:text-sm text-muted-foreground",
                                        children: t(
                                          "interview.credits.minutes",
                                        ),
                                      }),
                                    ],
                                  }),
                                  l &&
                                    (0, r.jsxs)("div", {
                                      className:
                                        "flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-6 text-xs text-muted-foreground",
                                      children: [
                                        (0, r.jsxs)("div", {
                                          children: [
                                            (0, r.jsxs)("span", {
                                              className:
                                                "font-medium text-secondary",
                                              children: [
                                                t(
                                                  "interview.credits.thisMonth",
                                                ),
                                                " ",
                                              ],
                                            }),
                                            (0, r.jsxs)("span", {
                                              children: [
                                                l.current_month_sessions,
                                                " ",
                                                1 !== l.current_month_sessions
                                                  ? t(
                                                      "interview.credits.sessions",
                                                    )
                                                  : t(
                                                      "interview.credits.session",
                                                    ),
                                                " (",
                                                l.current_month_minutes.toFixed(
                                                  1,
                                                ),
                                                " ",
                                                t("interview.credits.min"),
                                                ")",
                                              ],
                                            }),
                                          ],
                                        }),
                                        (0, r.jsxs)("div", {
                                          className: "sm:block",
                                          children: [
                                            (0, r.jsxs)("span", {
                                              className:
                                                "font-medium text-secondary",
                                              children: [
                                                t("interview.credits.allTime"),
                                                " ",
                                              ],
                                            }),
                                            (0, r.jsxs)("span", {
                                              children: [
                                                l.total_sessions,
                                                " ",
                                                1 !== l.total_sessions
                                                  ? t(
                                                      "interview.credits.sessions",
                                                    )
                                                  : t(
                                                      "interview.credits.session",
                                                    ),
                                                " (",
                                                l.total_minutes_used.toFixed(1),
                                                " ",
                                                t("interview.credits.min"),
                                                ")",
                                              ],
                                            }),
                                          ],
                                        }),
                                      ],
                                    }),
                                ],
                              }),
                            }),
                    }),
                    (0, r.jsx)("div", {
                      className: "lg:hidden w-full h-px bg-border",
                    }),
                    (0, r.jsx)("div", {
                      className: "hidden lg:block w-px h-24 bg-border",
                    }),
                    (0, r.jsxs)("div", {
                      className: "w-full lg:w-auto lg:min-w-[280px]",
                      children: [
                        f &&
                          null !== n &&
                          n <= 0 &&
                          (0, r.jsxs)("div", {
                            className:
                              "bg-orange-50 border border-orange-200 rounded-lg p-2 sm:p-3 text-xs text-orange-700 mb-2 sm:mb-3 flex items-start gap-2",
                            children: [
                              (0, r.jsx)(I.A, {
                                className:
                                  "w-3.5 h-3.5 sm:w-4 sm:h-4 mt-0.5 flex-shrink-0",
                              }),
                              (0, r.jsx)("span", {
                                className: "text-xs",
                                children: f,
                              }),
                            ],
                          }),
                        (0, r.jsxs)(x.$, {
                          onClick: () => d(!0),
                          className:
                            "w-full rounded-full bg-primary hover:bg-primary/90 text-white font-semibold shadow-md hover:shadow-lg transition-all text-sm sm:text-base h-auto py-2.5 sm:py-3",
                          size: "lg",
                          children: [
                            (0, r.jsx)(A.A, {
                              className:
                                "w-4 h-4 sm:w-5 sm:h-5 mr-1.5 sm:mr-2 flex-shrink-0",
                            }),
                            t("interview.credits.buyMoreCredits"),
                          ],
                        }),
                        (0, r.jsx)("p", {
                          className:
                            "text-xs text-muted-foreground text-center mt-1.5 sm:mt-2",
                          children: t("interview.credits.neverExpire"),
                        }),
                      ],
                    }),
                  ],
                }),
              }),
              (0, r.jsx)("div", {
                className:
                  "bg-card rounded-xl border border-border shadow-sm overflow-hidden h-[500px] sm:h-[600px] md:h-[650px] lg:h-[700px]",
                children: (0, r.jsx)(w, {
                  onCreditsDepleted: () => {
                    (p(!0), d(!0));
                  },
                }),
              }),
              (0, r.jsx)(_, {
                open: c,
                onOpenChange: (e) => {
                  (d(e), e || p(!1));
                },
                isDepleted: m,
                onSuccess: () => {
                  (d(!1), p(!1), window.location.reload());
                },
              }),
            ],
          })
        );
      }
      var T = t(70005),
        P = t(18790),
        E = t(84222),
        F = t(84217),
        D = t(30620),
        H = t(30612),
        L = t(16828);
      function O(e) {
        let { sessionId: s, open: t, onOpenChange: n } = e,
          { t: a } = (0, h.ok)(),
          [l, c] = (0, i.useState)(!1),
          [m, x] = (0, i.useState)(null),
          [f, w] = (0, i.useState)([]),
          [g, y] = (0, i.useState)(null),
          [v, j] = (0, i.useState)(null);
        return (
          (0, i.useEffect)(() => {
            if (!t || !s) {
              (x(null), w([]), y(null), j(null));
              return;
            }
            (async () => {
              (c(!0), y(null), j(null));
              try {
                let e = await fetch(
                  "/api/interview/voice/messages?session_id=".concat(s),
                );
                if (!e.ok) {
                  let s = await e
                    .json()
                    .catch(() => ({
                      error: "Failed to fetch session history",
                    }));
                  throw Error(s.error || "Failed to fetch session history");
                }
                let t = await e.json();
                if (t.success)
                  (x(t.session), w(t.messages), t.warning && j(t.warning));
                else throw Error(t.error || "Failed to load session");
              } catch (e) {
                (console.error("Error fetching session history:", e),
                  y(e instanceof Error ? e.message : "Failed to load session"));
              } finally {
                c(!1);
              }
            })();
          }, [s, t]),
          (0, r.jsx)(p.lG, {
            open: t,
            onOpenChange: n,
            children: (0, r.jsxs)(p.Cf, {
              className: "max-w-3xl h-[80vh] flex flex-col",
              children: [
                (0, r.jsxs)(p.c7, {
                  children: [
                    (0, r.jsx)(p.L3, {
                      children: a("interview.components.sessionHistory.title"),
                    }),
                    (0, r.jsx)(p.rr, {
                      children: a(
                        "interview.components.sessionHistory.description",
                      ),
                    }),
                  ],
                }),
                l
                  ? (0, r.jsx)("div", {
                      className: "flex items-center justify-center flex-1",
                      children: (0, r.jsx)(k.A, {
                        className: "w-8 h-8 animate-spin text-primary",
                      }),
                    })
                  : g
                    ? (0, r.jsx)("div", {
                        className: "flex items-center justify-center flex-1",
                        children: (0, r.jsx)("p", {
                          className: "text-destructive",
                          children: g,
                        }),
                      })
                    : (0, r.jsxs)(r.Fragment, {
                        children: [
                          m &&
                            (0, r.jsxs)("div", {
                              className: "bg-muted/50 rounded-lg p-4 space-y-2",
                              children: [
                                (0, r.jsxs)("div", {
                                  className: "flex items-center gap-4 text-sm",
                                  children: [
                                    (0, r.jsxs)("div", {
                                      className: "flex items-center gap-2",
                                      children: [
                                        (0, r.jsx)(F.A, {
                                          className:
                                            "w-4 h-4 text-muted-foreground",
                                        }),
                                        (0, r.jsx)("span", {
                                          children: m.started_at
                                            ? (0, D.GP)(
                                                new Date(m.started_at),
                                                "PPp",
                                              )
                                            : a(
                                                "interview.components.sessionHistory.unknownDate",
                                              ),
                                        }),
                                      ],
                                    }),
                                    (0, r.jsxs)("div", {
                                      className: "flex items-center gap-2",
                                      children: [
                                        (0, r.jsx)(d.A, {
                                          className:
                                            "w-4 h-4 text-muted-foreground",
                                        }),
                                        (0, r.jsxs)("span", {
                                          children: [
                                            a(
                                              "interview.components.sessionHistory.duration",
                                            ),
                                            ": ",
                                            ((e) => {
                                              if (!e) return "N/A";
                                              let s = Math.floor(e / 60);
                                              return ""
                                                .concat(s, "m ")
                                                .concat(e % 60, "s");
                                            })(m.duration_seconds),
                                          ],
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                                (0, r.jsxs)("div", {
                                  className:
                                    "flex items-center gap-4 text-sm text-muted-foreground",
                                  children: [
                                    (0, r.jsxs)("span", {
                                      children: [
                                        a(
                                          "interview.components.sessionHistory.provider",
                                        ),
                                        ": ",
                                        m.provider ||
                                          a(
                                            "interview.components.sessionHistory.unknown",
                                          ),
                                      ],
                                    }),
                                    (0, r.jsxs)("span", {
                                      children: [
                                        a(
                                          "interview.components.sessionHistory.type",
                                        ),
                                        ": ",
                                        m.agent_type ||
                                          a(
                                            "interview.components.sessionHistory.generalInterview",
                                          ),
                                      ],
                                    }),
                                    m.minutes_used &&
                                      (0, r.jsxs)("span", {
                                        children: [
                                          a(
                                            "interview.components.sessionHistory.creditsUsed",
                                          ),
                                          ": ",
                                          m.minutes_used.toFixed(2),
                                          " min",
                                        ],
                                      }),
                                  ],
                                }),
                              ],
                            }),
                          (0, r.jsxs)(H.F, {
                            className: "flex-1 pr-4",
                            children: [
                              v &&
                                (0, r.jsxs)("div", {
                                  className:
                                    "bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-4 flex items-start gap-3",
                                  children: [
                                    (0, r.jsx)(I.A, {
                                      className:
                                        "w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5",
                                    }),
                                    (0, r.jsx)("div", {
                                      className: "flex-1",
                                      children: (0, r.jsx)("p", {
                                        className: "text-sm text-yellow-800",
                                        children: v,
                                      }),
                                    }),
                                  ],
                                }),
                              0 === f.length
                                ? (0, r.jsx)("div", {
                                    className:
                                      "flex items-center justify-center h-full text-muted-foreground",
                                    children: (0, r.jsx)("p", {
                                      children: a(
                                        "interview.components.sessionHistory.noMessages",
                                      ),
                                    }),
                                  })
                                : (0, r.jsx)("div", {
                                    className: "space-y-4 py-4",
                                    children: f.map((e) =>
                                      (0, r.jsxs)(
                                        "div",
                                        {
                                          className: (0, u.cn)(
                                            "flex gap-3",
                                            "user" === e.message_type
                                              ? "justify-end"
                                              : "justify-start",
                                          ),
                                          children: [
                                            "ai" === e.message_type &&
                                              (0, r.jsx)("div", {
                                                className:
                                                  "w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0",
                                                children: (0, r.jsx)(L.A, {
                                                  className:
                                                    "w-5 h-5 text-primary",
                                                }),
                                              }),
                                            (0, r.jsxs)("div", {
                                              className: (0, u.cn)(
                                                "rounded-lg px-4 py-3 max-w-[70%]",
                                                "user" === e.message_type
                                                  ? "bg-primary text-primary-foreground"
                                                  : "bg-muted",
                                              ),
                                              children: [
                                                (0, r.jsx)("p", {
                                                  className:
                                                    "text-sm whitespace-pre-wrap break-words",
                                                  children: e.content,
                                                }),
                                                (0, r.jsx)("p", {
                                                  className: (0, u.cn)(
                                                    "text-xs mt-1",
                                                    "user" === e.message_type
                                                      ? "text-primary-foreground/70"
                                                      : "text-muted-foreground",
                                                  ),
                                                  children: (0, D.GP)(
                                                    new Date(e.timestamp),
                                                    "p",
                                                  ),
                                                }),
                                              ],
                                            }),
                                            "user" === e.message_type &&
                                              (0, r.jsx)("div", {
                                                className:
                                                  "w-8 h-8 rounded-full bg-secondary/50 flex items-center justify-center flex-shrink-0",
                                                children: (0, r.jsx)(o.A, {
                                                  className:
                                                    "w-5 h-5 text-secondary-foreground",
                                                }),
                                              }),
                                          ],
                                        },
                                        e.id,
                                      ),
                                    ),
                                  }),
                            ],
                          }),
                        ],
                      }),
              ],
            }),
          })
        );
      }
      function U(e) {
        let { className: s, limit: t = 10 } = e,
          { t: n } = (0, h.ok)(),
          [a, l] = (0, i.useState)([]),
          [o, c] = (0, i.useState)([]),
          [m, x] = (0, i.useState)(!0),
          [p, f] = (0, i.useState)("sessions"),
          [w, g] = (0, i.useState)(null),
          [y, v] = (0, i.useState)(!1);
        (0, i.useEffect)(() => {
          b();
        }, [t]);
        let b = async () => {
            try {
              let e = await fetch(
                "/api/interview/voice/history?limit=".concat(t),
              );
              if (!e.ok) throw Error("Failed to fetch history");
              let s = await e.json();
              s.success && (l(s.sessions || []), c(s.purchases || []));
            } catch (e) {
              console.error("Error fetching history:", e);
            } finally {
              x(!1);
            }
          },
          N = (e) => {
            switch (e) {
              case "completed":
                return (0, r.jsx)(T.A, { className: "w-4 h-4 text-green-500" });
              case "interrupted":
                return (0, r.jsx)(I.A, {
                  className: "w-4 h-4 text-orange-500",
                });
              case "error":
                return (0, r.jsx)(P.A, { className: "w-4 h-4 text-red-500" });
              default:
                return (0, r.jsx)(d.A, { className: "w-4 h-4 text-blue-500" });
            }
          },
          k = (e) => {
            let s = Math.floor(e / 60);
            return "".concat(s, "m ").concat(e % 60, "s");
          };
        return m
          ? (0, r.jsx)("div", {
              className: (0, u.cn)(
                "bg-card rounded-xl p-6 border border-border",
                s,
              ),
              children: (0, r.jsx)("div", {
                className: "animate-pulse space-y-4",
                children: [1, 2, 3].map((e) =>
                  (0, r.jsx)("div", { className: "h-16 bg-beige rounded" }, e),
                ),
              }),
            })
          : (0, r.jsxs)("div", {
              className: (0, u.cn)(
                "bg-card rounded-xl border border-border overflow-hidden",
                s,
              ),
              children: [
                (0, r.jsxs)("div", {
                  className: "flex border-b border-border",
                  children: [
                    (0, r.jsx)("button", {
                      onClick: () => f("sessions"),
                      className: (0, u.cn)(
                        "flex-1 px-3 sm:px-4 md:px-6 py-3 sm:py-4 text-xs sm:text-sm font-medium transition-colors",
                        "sessions" === p
                          ? "text-primary bg-beige border-b-2 border-primary"
                          : "text-muted-foreground hover:text-secondary hover:bg-cream",
                      ),
                      children: (0, r.jsxs)("div", {
                        className:
                          "flex items-center justify-center gap-1.5 sm:gap-2",
                        children: [
                          (0, r.jsx)(d.A, {
                            className:
                              "w-3.5 h-3.5 sm:w-4 sm:h-4 flex-shrink-0",
                          }),
                          (0, r.jsxs)("span", {
                            className: "truncate",
                            children: [
                              n("interview.history.sessionsTab"),
                              " (",
                              a.length,
                              ")",
                            ],
                          }),
                        ],
                      }),
                    }),
                    (0, r.jsx)("button", {
                      onClick: () => f("purchases"),
                      className: (0, u.cn)(
                        "flex-1 px-3 sm:px-4 md:px-6 py-3 sm:py-4 text-xs sm:text-sm font-medium transition-colors",
                        "purchases" === p
                          ? "text-primary bg-beige border-b-2 border-primary"
                          : "text-muted-foreground hover:text-secondary hover:bg-cream",
                      ),
                      children: (0, r.jsxs)("div", {
                        className:
                          "flex items-center justify-center gap-1.5 sm:gap-2",
                        children: [
                          (0, r.jsx)(j.A, {
                            className:
                              "w-3.5 h-3.5 sm:w-4 sm:h-4 flex-shrink-0",
                          }),
                          (0, r.jsxs)("span", {
                            className: "truncate",
                            children: [
                              n("interview.history.purchasesTab"),
                              " (",
                              o.length,
                              ")",
                            ],
                          }),
                        ],
                      }),
                    }),
                  ],
                }),
                (0, r.jsxs)("div", {
                  className: "p-3 sm:p-4 md:p-6",
                  children: [
                    "sessions" === p &&
                      (0, r.jsx)("div", {
                        className: "space-y-2 sm:space-y-3",
                        children:
                          0 === a.length
                            ? (0, r.jsx)("p", {
                                className:
                                  "text-center text-muted-foreground text-xs sm:text-sm py-6 sm:py-8 px-3",
                                children: n("interview.history.noSessions"),
                              })
                            : a.map((e) =>
                                (0, r.jsxs)(
                                  "button",
                                  {
                                    onClick: () => {
                                      (g(e.id), v(!0));
                                    },
                                    className:
                                      "w-full flex items-start gap-2 sm:gap-3 md:gap-4 p-3 sm:p-4 bg-cream rounded-lg border border-border hover:bg-beige hover:border-primary/50 transition-all group text-left",
                                    children: [
                                      (0, r.jsx)("div", {
                                        className:
                                          "mt-0.5 sm:mt-1 flex-shrink-0",
                                        children: N(e.status),
                                      }),
                                      (0, r.jsx)("div", {
                                        className: "flex-1 min-w-0",
                                        children: (0, r.jsxs)("div", {
                                          className:
                                            "flex items-start justify-between gap-2",
                                          children: [
                                            (0, r.jsxs)("div", {
                                              className: "flex-1 min-w-0",
                                              children: [
                                                (0, r.jsxs)("div", {
                                                  className:
                                                    "flex items-center gap-1.5 sm:gap-2",
                                                  children: [
                                                    (0, r.jsxs)("p", {
                                                      className:
                                                        "font-medium text-secondary text-xs sm:text-sm capitalize truncate",
                                                      children: [
                                                        e.agent_type,
                                                        " ",
                                                        n(
                                                          "interview.history.interview",
                                                        ),
                                                      ],
                                                    }),
                                                    (0, r.jsx)(E.A, {
                                                      className:
                                                        "w-3 h-3 sm:w-3.5 sm:h-3.5 text-primary/60 group-hover:text-primary transition-colors flex-shrink-0",
                                                    }),
                                                  ],
                                                }),
                                                (0, r.jsxs)("p", {
                                                  className:
                                                    "text-xs text-muted-foreground mt-0.5 sm:mt-1 break-words",
                                                  children: [
                                                    (0, r.jsx)(F.A, {
                                                      className:
                                                        "w-2.5 h-2.5 sm:w-3 sm:h-3 inline mr-0.5 sm:mr-1 flex-shrink-0",
                                                    }),
                                                    (0, r.jsx)("span", {
                                                      className:
                                                        "text-[10px] sm:text-xs",
                                                      children:
                                                        e.started_at &&
                                                        (0, D.GP)(
                                                          new Date(
                                                            e.started_at,
                                                          ),
                                                          "MMM d, yyyy h:mm a",
                                                        ),
                                                    }),
                                                  ],
                                                }),
                                                (0, r.jsx)("p", {
                                                  className:
                                                    "text-[10px] sm:text-xs text-primary/70 mt-0.5 sm:mt-1 group-hover:text-primary transition-colors hidden sm:block",
                                                  children: n(
                                                    "interview.history.clickToView",
                                                  ),
                                                }),
                                              ],
                                            }),
                                            (0, r.jsxs)("div", {
                                              className:
                                                "text-right flex-shrink-0",
                                              children: [
                                                (0, r.jsxs)("p", {
                                                  className:
                                                    "font-semibold text-secondary text-xs sm:text-sm whitespace-nowrap",
                                                  children: [
                                                    e.minutes_used.toFixed(2),
                                                    " min",
                                                  ],
                                                }),
                                                (0, r.jsx)("p", {
                                                  className:
                                                    "text-[10px] sm:text-xs text-muted-foreground whitespace-nowrap",
                                                  children: k(
                                                    e.duration_seconds,
                                                  ),
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                      }),
                                    ],
                                  },
                                  e.id,
                                ),
                              ),
                      }),
                    "purchases" === p &&
                      (0, r.jsx)("div", {
                        className: "space-y-2 sm:space-y-3",
                        children:
                          0 === o.length
                            ? (0, r.jsx)("p", {
                                className:
                                  "text-center text-muted-foreground text-xs sm:text-sm py-6 sm:py-8 px-3",
                                children: n("interview.history.noPurchases"),
                              })
                            : o.map((e) =>
                                (0, r.jsxs)(
                                  "div",
                                  {
                                    className:
                                      "flex items-start gap-2 sm:gap-3 md:gap-4 p-3 sm:p-4 bg-cream rounded-lg border border-border",
                                    children: [
                                      (0, r.jsx)("div", {
                                        className:
                                          "mt-0.5 sm:mt-1 flex-shrink-0",
                                        children: (0, r.jsx)(j.A, {
                                          className:
                                            "w-3.5 h-3.5 sm:w-4 sm:h-4 text-primary",
                                        }),
                                      }),
                                      (0, r.jsx)("div", {
                                        className: "flex-1 min-w-0",
                                        children: (0, r.jsxs)("div", {
                                          className:
                                            "flex items-start justify-between gap-2",
                                          children: [
                                            (0, r.jsxs)("div", {
                                              className: "flex-1 min-w-0",
                                              children: [
                                                (0, r.jsxs)("p", {
                                                  className:
                                                    "font-medium text-secondary text-xs sm:text-sm break-words",
                                                  children: [
                                                    e.minutes_purchased,
                                                    " ",
                                                    n(
                                                      "interview.history.minutesPackage",
                                                    ),
                                                  ],
                                                }),
                                                (0, r.jsxs)("p", {
                                                  className:
                                                    "text-xs text-muted-foreground mt-0.5 sm:mt-1 break-words",
                                                  children: [
                                                    (0, r.jsx)(F.A, {
                                                      className:
                                                        "w-2.5 h-2.5 sm:w-3 sm:h-3 inline mr-0.5 sm:mr-1 flex-shrink-0",
                                                    }),
                                                    (0, r.jsx)("span", {
                                                      className:
                                                        "text-[10px] sm:text-xs",
                                                      children: (0, D.GP)(
                                                        new Date(e.created_at),
                                                        "MMM d, yyyy h:mm a",
                                                      ),
                                                    }),
                                                  ],
                                                }),
                                                (0, r.jsxs)("p", {
                                                  className:
                                                    "text-[10px] sm:text-xs text-muted-foreground mt-0.5 sm:mt-1",
                                                  children: [
                                                    e.minutes_remaining,
                                                    " min ",
                                                    n(
                                                      "interview.history.remaining",
                                                    ),
                                                  ],
                                                }),
                                              ],
                                            }),
                                            (0, r.jsxs)("div", {
                                              className:
                                                "text-right flex-shrink-0",
                                              children: [
                                                (0, r.jsxs)("p", {
                                                  className:
                                                    "font-semibold text-secondary text-xs sm:text-sm whitespace-nowrap",
                                                  children: [
                                                    "$",
                                                    e.price_paid_usd.toFixed(2),
                                                  ],
                                                }),
                                                (0, r.jsx)("p", {
                                                  className:
                                                    "text-[10px] sm:text-xs text-muted-foreground capitalize whitespace-nowrap",
                                                  children: e.purchase_type,
                                                }),
                                              ],
                                            }),
                                          ],
                                        }),
                                      }),
                                    ],
                                  },
                                  e.id,
                                ),
                              ),
                      }),
                  ],
                }),
                (0, r.jsx)(O, { sessionId: w, open: y, onOpenChange: v }),
              ],
            });
      }
      var R = t(37426);
      function W(e) {
        let { open: s, onOpenChange: t } = e,
          { t: i } = (0, h.ok)();
        return (0, r.jsx)(p.lG, {
          open: s,
          onOpenChange: t,
          children: (0, r.jsxs)(p.Cf, {
            className:
              "max-w-[95vw] sm:max-w-2xl md:max-w-3xl max-h-[90vh] sm:max-h-[85vh] p-4 sm:p-6",
            children: [
              (0, r.jsxs)(p.c7, {
                children: [
                  (0, r.jsxs)(p.L3, {
                    className:
                      "flex items-center gap-2 text-base sm:text-lg md:text-xl",
                    children: [
                      (0, r.jsx)(R.A, {
                        className:
                          "w-4 h-4 sm:w-5 sm:h-5 text-primary flex-shrink-0",
                      }),
                      (0, r.jsx)("span", {
                        className: "break-words",
                        children: i("interview.components.policyModal.title"),
                      }),
                    ],
                  }),
                  (0, r.jsx)(p.rr, {
                    className: "text-xs sm:text-sm",
                    children: i("interview.components.policyModal.description"),
                  }),
                ],
              }),
              (0, r.jsx)(H.F, {
                className:
                  "h-[calc(90vh-140px)] sm:h-[calc(85vh-120px)] pr-2 sm:pr-4",
                children: (0, r.jsxs)("div", {
                  className: "space-y-4 sm:space-y-6 text-xs sm:text-sm",
                  children: [
                    (0, r.jsxs)("section", {
                      className:
                        "bg-primary/10 border border-primary/20 rounded-lg p-4",
                      children: [
                        (0, r.jsxs)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: [
                            (0, r.jsx)(I.A, {
                              className: "w-4 h-4 text-primary",
                            }),
                            i(
                              "interview.components.policyModal.keyPoints.title",
                            ),
                          ],
                        }),
                        (0, r.jsxs)("ul", {
                          className: "space-y-2 text-muted-foreground",
                          children: [
                            (0, r.jsxs)("li", {
                              className: "flex items-start gap-2",
                              children: [
                                (0, r.jsx)(T.A, {
                                  className:
                                    "w-4 h-4 text-primary mt-0.5 flex-shrink-0",
                                }),
                                (0, r.jsx)("span", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.keyPoints.freeTrial",
                                    ),
                                  },
                                }),
                              ],
                            }),
                            (0, r.jsxs)("li", {
                              className: "flex items-start gap-2",
                              children: [
                                (0, r.jsx)(I.A, {
                                  className:
                                    "w-4 h-4 text-orange-500 mt-0.5 flex-shrink-0",
                                }),
                                (0, r.jsx)("span", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.keyPoints.creditValidity",
                                    ),
                                  },
                                }),
                              ],
                            }),
                            (0, r.jsxs)("li", {
                              className: "flex items-start gap-2",
                              children: [
                                (0, r.jsx)(P.A, {
                                  className:
                                    "w-4 h-4 text-red-500 mt-0.5 flex-shrink-0",
                                }),
                                (0, r.jsx)("span", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.keyPoints.noRefunds",
                                    ),
                                  },
                                }),
                              ],
                            }),
                            (0, r.jsxs)("li", {
                              className: "flex items-start gap-2",
                              children: [
                                (0, r.jsx)(T.A, {
                                  className:
                                    "w-4 h-4 text-primary mt-0.5 flex-shrink-0",
                                }),
                                (0, r.jsx)("span", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.keyPoints.autoDisconnect",
                                    ),
                                  },
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsx)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: i(
                            "interview.components.policyModal.serviceDescription.title",
                          ),
                        }),
                        (0, r.jsx)("p", {
                          className:
                            "text-muted-foreground leading-relaxed mb-2",
                          children: i(
                            "interview.components.policyModal.serviceDescription.paragraph1",
                          ),
                        }),
                        (0, r.jsx)("p", {
                          className: "text-muted-foreground leading-relaxed",
                          children: i(
                            "interview.components.policyModal.serviceDescription.paragraph2",
                          ),
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsxs)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: [
                            (0, r.jsx)(d.A, {
                              className: "w-4 h-4 text-primary",
                            }),
                            i(
                              "interview.components.policyModal.creditSystem.title",
                            ),
                          ],
                        }),
                        (0, r.jsxs)("div", {
                          className: "space-y-2 text-muted-foreground",
                          children: [
                            (0, r.jsx)("p", {
                              dangerouslySetInnerHTML: {
                                __html: i(
                                  "interview.components.policyModal.creditSystem.howItWorks",
                                ),
                              },
                            }),
                            (0, r.jsxs)("ul", {
                              className: "list-disc list-inside space-y-1 ml-2",
                              children: [
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.creditSystem.items.measuredInMinutes",
                                    ),
                                  },
                                }),
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.creditSystem.items.billedPerSecond",
                                    ),
                                  },
                                }),
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.creditSystem.items.validity",
                                    ),
                                  },
                                }),
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.creditSystem.items.freeMinutes",
                                    ),
                                  },
                                }),
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.creditSystem.items.nonTransferable",
                                    ),
                                  },
                                }),
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.creditSystem.items.expiredNoRefund",
                                    ),
                                  },
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsxs)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: [
                            (0, r.jsx)(P.A, {
                              className: "w-4 h-4 text-red-500",
                            }),
                            i(
                              "interview.components.policyModal.refundPolicy.title",
                            ),
                          ],
                        }),
                        (0, r.jsxs)("div", {
                          className: "space-y-3 text-muted-foreground",
                          children: [
                            (0, r.jsxs)("div", {
                              className:
                                "bg-red-50 border-2 border-red-300 rounded-lg p-4",
                              children: [
                                (0, r.jsxs)("p", {
                                  className:
                                    "font-bold text-red-800 mb-3 flex items-center gap-2 text-base",
                                  children: [
                                    (0, r.jsx)(P.A, { className: "w-5 h-5" }),
                                    i(
                                      "interview.components.policyModal.refundPolicy.finalSales",
                                    ),
                                  ],
                                }),
                                (0, r.jsx)("p", {
                                  className:
                                    "text-red-700 leading-relaxed mb-3",
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.refundPolicy.acknowledgement",
                                    ),
                                  },
                                }),
                                (0, r.jsxs)("ul", {
                                  className:
                                    "list-disc list-inside space-y-2 ml-2 text-red-700",
                                  children: [
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.circumstances.changeOfMind",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.circumstances.unusedCredits",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.circumstances.technicalIssues",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.circumstances.dissatisfaction",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.circumstances.userDisconnections",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.circumstances.expiredCredits",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.circumstances.accountSuspension",
                                      ),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, r.jsxs)("div", {
                              className:
                                "bg-yellow-50 border border-yellow-300 rounded-lg p-3",
                              children: [
                                (0, r.jsxs)("p", {
                                  className:
                                    "font-medium text-yellow-800 mb-2 flex items-center gap-2",
                                  children: [
                                    (0, r.jsx)(I.A, { className: "w-4 h-4" }),
                                    i(
                                      "interview.components.policyModal.refundPolicy.tryBeforeBuy.title",
                                    ),
                                  ],
                                }),
                                (0, r.jsx)("p", {
                                  className: "text-yellow-700 text-sm",
                                  children: i(
                                    "interview.components.policyModal.refundPolicy.tryBeforeBuy.description",
                                  ),
                                }),
                              ],
                            }),
                            (0, r.jsxs)("div", {
                              className:
                                "bg-blue-50 border border-blue-200 rounded-lg p-3",
                              children: [
                                (0, r.jsx)("p", {
                                  className: "font-medium text-blue-800 mb-2",
                                  children: i(
                                    "interview.components.policyModal.refundPolicy.exception.title",
                                  ),
                                }),
                                (0, r.jsx)("p", {
                                  className: "text-blue-700 text-sm",
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.refundPolicy.exception.description",
                                    ),
                                  },
                                }),
                                (0, r.jsxs)("ul", {
                                  className:
                                    "list-disc list-inside space-y-1 ml-2 text-blue-700 text-sm mt-2",
                                  children: [
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.exception.cases.creditsNotAdded",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.exception.cases.duplicateCharges",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.refundPolicy.exception.cases.processingErrors",
                                      ),
                                    }),
                                  ],
                                }),
                                (0, r.jsx)("p", {
                                  className:
                                    "text-blue-700 text-xs mt-2 italic",
                                  children: i(
                                    "interview.components.policyModal.refundPolicy.exception.contact",
                                  ),
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsx)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: i(
                            "interview.components.policyModal.fairUse.title",
                          ),
                        }),
                        (0, r.jsxs)("div", {
                          className: "space-y-2 text-muted-foreground",
                          children: [
                            (0, r.jsx)("p", {
                              dangerouslySetInnerHTML: {
                                __html: i(
                                  "interview.components.policyModal.fairUse.prohibited",
                                ),
                              },
                            }),
                            (0, r.jsxs)("ul", {
                              className: "list-disc list-inside space-y-1 ml-2",
                              children: [
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.fairUse.items.multipleAccounts",
                                  ),
                                }),
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.fairUse.items.commercialResale",
                                  ),
                                }),
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.fairUse.items.automatedBots",
                                  ),
                                }),
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.fairUse.items.exploitSystem",
                                  ),
                                }),
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.fairUse.items.abusiveContent",
                                  ),
                                }),
                              ],
                            }),
                            (0, r.jsx)("p", {
                              className: "text-xs italic mt-2",
                              children: i(
                                "interview.components.policyModal.fairUse.violations",
                              ),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsx)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: i(
                            "interview.components.policyModal.payment.title",
                          ),
                        }),
                        (0, r.jsx)("div", {
                          className: "space-y-2 text-muted-foreground",
                          children: (0, r.jsx)("p", {
                            className: "leading-relaxed",
                            children: i(
                              "interview.components.policyModal.payment.description",
                            ),
                          }),
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsxs)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: [
                            (0, r.jsx)(R.A, {
                              className: "w-4 h-4 text-primary",
                            }),
                            i("interview.components.policyModal.privacy.title"),
                          ],
                        }),
                        (0, r.jsxs)("div", {
                          className: "space-y-2 text-muted-foreground",
                          children: [
                            (0, r.jsx)("p", {
                              className: "leading-relaxed",
                              children: i(
                                "interview.components.policyModal.privacy.description",
                              ),
                            }),
                            (0, r.jsx)("p", {
                              className: "text-xs italic mt-2",
                              children: i(
                                "interview.components.policyModal.privacy.dataRights",
                              ),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsx)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: i(
                            "interview.components.policyModal.serviceAvailability.title",
                          ),
                        }),
                        (0, r.jsx)("div", {
                          className: "space-y-2 text-muted-foreground",
                          children: (0, r.jsxs)("ul", {
                            className: "list-disc list-inside space-y-1 ml-2",
                            children: [
                              (0, r.jsx)("li", {
                                children: i(
                                  "interview.components.policyModal.serviceAvailability.items.uptime",
                                ),
                              }),
                              (0, r.jsx)("li", {
                                children: i(
                                  "interview.components.policyModal.serviceAvailability.items.maintenance",
                                ),
                              }),
                              (0, r.jsx)("li", {
                                children: i(
                                  "interview.components.policyModal.serviceAvailability.items.creditsValid",
                                ),
                              }),
                              (0, r.jsx)("li", {
                                children: i(
                                  "interview.components.policyModal.serviceAvailability.items.stableConnection",
                                ),
                              }),
                              (0, r.jsx)("li", {
                                children: i(
                                  "interview.components.policyModal.serviceAvailability.items.noRefunds",
                                ),
                              }),
                            ],
                          }),
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsx)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: i(
                            "interview.components.policyModal.liability.title",
                          ),
                        }),
                        (0, r.jsxs)("div", {
                          className: "space-y-2 text-muted-foreground",
                          children: [
                            (0, r.jsx)("p", {
                              className: "leading-relaxed",
                              children: i(
                                "interview.components.policyModal.liability.description",
                              ),
                            }),
                            (0, r.jsxs)("ul", {
                              className: "list-disc list-inside space-y-1 ml-2",
                              children: [
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.liability.items.accuracy",
                                  ),
                                }),
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.liability.items.outcomes",
                                  ),
                                }),
                                (0, r.jsx)("li", {
                                  children: i(
                                    "interview.components.policyModal.liability.items.damages",
                                  ),
                                }),
                              ],
                            }),
                            (0, r.jsx)("p", {
                              className:
                                "text-xs italic mt-2 bg-yellow-50 border border-yellow-200 rounded p-2",
                              dangerouslySetInnerHTML: {
                                __html: i(
                                  "interview.components.policyModal.liability.disclaimer",
                                ),
                              },
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      children: [
                        (0, r.jsx)("h3", {
                          className:
                            "font-semibold text-secondary flex items-center gap-2 mb-3",
                          children: i(
                            "interview.components.policyModal.support.title",
                          ),
                        }),
                        (0, r.jsxs)("div", {
                          className: "space-y-3 text-muted-foreground",
                          children: [
                            (0, r.jsxs)("div", {
                              children: [
                                (0, r.jsx)("p", {
                                  className: "font-medium text-secondary mb-1",
                                  children: i(
                                    "interview.components.policyModal.support.customerSupport.title",
                                  ),
                                }),
                                (0, r.jsxs)("ul", {
                                  className:
                                    "list-disc list-inside space-y-1 ml-2",
                                  children: [
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.support.customerSupport.email",
                                      ),
                                    }),
                                    (0, r.jsx)("li", {
                                      children: i(
                                        "interview.components.policyModal.support.customerSupport.responseTime",
                                      ),
                                    }),
                                  ],
                                }),
                              ],
                            }),
                            (0, r.jsxs)("div", {
                              children: [
                                (0, r.jsx)("p", {
                                  className: "font-medium text-secondary mb-1",
                                  children: i(
                                    "interview.components.policyModal.support.policyChanges.title",
                                  ),
                                }),
                                (0, r.jsx)("p", {
                                  className: "text-sm",
                                  children: i(
                                    "interview.components.policyModal.support.policyChanges.description",
                                  ),
                                }),
                              ],
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsxs)("section", {
                      className: "border-t pt-4 mt-6",
                      children: [
                        (0, r.jsx)("p", {
                          className: "text-xs text-muted-foreground italic",
                          dangerouslySetInnerHTML: {
                            __html: i(
                              "interview.components.policyModal.footer.metadata",
                            ),
                          },
                        }),
                        (0, r.jsxs)("div", {
                          className:
                            "bg-red-50 border border-red-200 rounded-lg p-3 mt-3",
                          children: [
                            (0, r.jsx)("p", {
                              className: "text-xs text-red-700 font-medium",
                              dangerouslySetInnerHTML: {
                                __html: i(
                                  "interview.components.policyModal.footer.agreement.title",
                                ),
                              },
                            }),
                            (0, r.jsxs)("ul", {
                              className:
                                "text-xs text-red-700 mt-2 space-y-1 ml-4",
                              children: [
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.footer.agreement.items.finalSales",
                                    ),
                                  },
                                }),
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.footer.agreement.items.expiry",
                                    ),
                                  },
                                }),
                                (0, r.jsx)("li", {
                                  dangerouslySetInnerHTML: {
                                    __html: i(
                                      "interview.components.policyModal.footer.agreement.items.tested",
                                    ),
                                  },
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
            ],
          }),
        });
      }
      var B = t(52141),
        z = t(35121),
        G = t(17802),
        J = t(65915),
        $ = t(27239),
        V = t(31670),
        q = t(50341),
        Y = t(45748),
        K = t(93775),
        Q = t(10542),
        X = t.n(Q);
      function Z() {
        let { t: e } = (0, h.ok)(),
          [s, t] = (0, i.useState)(!0),
          [a, l] = (0, i.useState)(!1);
        return ((0, i.useEffect)(() => {
          let e = setTimeout(() => {
            t(!1);
          }, 500);
          return () => clearTimeout(e);
        }, []),
        s)
          ? (0, r.jsx)(K.O8, {})
          : (0, r.jsxs)("div", {
              className:
                "w-full max-w-7xl mx-auto px-3 sm:px-4 py-4 sm:py-6 space-y-4 sm:space-y-6 md:space-y-8",
              children: [
                (0, r.jsxs)(Y.P.div, {
                  initial: { opacity: 0, y: 20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.5 },
                  children: [
                    (0, r.jsxs)("div", {
                      className:
                        "flex flex-col sm:flex-row sm:items-start sm:justify-between gap-3 sm:gap-4 mb-4",
                      children: [
                        (0, r.jsxs)("div", {
                          className: "flex-1",
                          children: [
                            (0, r.jsx)(B.D, {
                              level: 1,
                              size: "compact",
                              variant: "default",
                              className: "mb-2 text-xl sm:text-2xl",
                              children: e("interview.page.title"),
                            }),
                            (0, r.jsx)(z.f, {
                              className:
                                "text-muted-foreground leading-relaxed text-sm sm:text-base",
                              children: e("interview.page.description"),
                            }),
                          ],
                        }),
                        (0, r.jsxs)("div", {
                          className:
                            "flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full bg-primary/10 border border-primary shrink-0 self-start",
                          children: [
                            (0, r.jsx)(g.A, {
                              className:
                                "w-3.5 h-3.5 sm:w-4 sm:h-4 text-primary",
                            }),
                            (0, r.jsx)("span", {
                              className:
                                "text-xs sm:text-sm font-semibold text-primary whitespace-nowrap",
                              children: e("interview.page.nowLive"),
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, r.jsx)("div", {
                      className:
                        "bg-beige border border-primary/20 rounded-xl p-3 sm:p-4 mb-4 sm:mb-6",
                      children: (0, r.jsxs)("div", {
                        className: "flex items-start gap-2 sm:gap-3",
                        children: [
                          (0, r.jsx)(J.A, {
                            className:
                              "w-4 h-4 sm:w-5 sm:h-5 text-primary mt-0.5 flex-shrink-0",
                          }),
                          (0, r.jsxs)("div", {
                            className: "flex-1 min-w-0",
                            children: [
                              (0, r.jsx)("h3", {
                                className:
                                  "font-semibold text-secondary text-xs sm:text-sm mb-2",
                                children: e("interview.page.howItWorks.title"),
                              }),
                              (0, r.jsxs)("ul", {
                                className:
                                  "space-y-1.5 sm:space-y-1 text-xs sm:text-sm text-muted-foreground",
                                children: [
                                  (0, r.jsxs)("li", {
                                    className:
                                      "flex items-start gap-1.5 sm:gap-2",
                                    children: [
                                      (0, r.jsx)(T.A, {
                                        className:
                                          "w-3.5 h-3.5 sm:w-4 sm:h-4 text-primary mt-0.5 flex-shrink-0",
                                      }),
                                      (0, r.jsxs)("span", {
                                        className: "break-words",
                                        children: [
                                          (0, r.jsx)("strong", {
                                            children: e(
                                              "interview.page.howItWorks.freeTrial",
                                            ),
                                          }),
                                          " ",
                                          e(
                                            "interview.page.howItWorks.freeTrialDesc",
                                          ),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, r.jsxs)("li", {
                                    className:
                                      "flex items-start gap-1.5 sm:gap-2",
                                    children: [
                                      (0, r.jsx)(T.A, {
                                        className:
                                          "w-3.5 h-3.5 sm:w-4 sm:h-4 text-primary mt-0.5 flex-shrink-0",
                                      }),
                                      (0, r.jsxs)("span", {
                                        className: "break-words",
                                        children: [
                                          (0, r.jsx)("strong", {
                                            children: e(
                                              "interview.page.howItWorks.payPerUse",
                                            ),
                                          }),
                                          " ",
                                          e(
                                            "interview.page.howItWorks.payPerUseDesc",
                                          ),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, r.jsxs)("li", {
                                    className:
                                      "flex items-start gap-1.5 sm:gap-2",
                                    children: [
                                      (0, r.jsx)(T.A, {
                                        className:
                                          "w-3.5 h-3.5 sm:w-4 sm:h-4 text-primary mt-0.5 flex-shrink-0",
                                      }),
                                      (0, r.jsxs)("span", {
                                        className: "break-words",
                                        children: [
                                          (0, r.jsx)("strong", {
                                            children: e(
                                              "interview.page.howItWorks.realTimePractice",
                                            ),
                                          }),
                                          " ",
                                          e(
                                            "interview.page.howItWorks.realTimePracticeDesc",
                                          ),
                                        ],
                                      }),
                                    ],
                                  }),
                                  (0, r.jsxs)("li", {
                                    className:
                                      "flex items-start gap-1.5 sm:gap-2",
                                    children: [
                                      (0, r.jsx)(T.A, {
                                        className:
                                          "w-3.5 h-3.5 sm:w-4 sm:h-4 text-primary mt-0.5 flex-shrink-0",
                                      }),
                                      (0, r.jsxs)("span", {
                                        className: "break-words",
                                        children: [
                                          (0, r.jsx)("strong", {
                                            children: e(
                                              "interview.page.howItWorks.trackProgress",
                                            ),
                                          }),
                                          " ",
                                          e(
                                            "interview.page.howItWorks.trackProgressDesc",
                                          ),
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, r.jsx)("div", {
                                className:
                                  "mt-2 sm:mt-3 pt-2 sm:pt-3 border-t border-primary/10",
                                children: (0, r.jsxs)(x.$, {
                                  onClick: () => l(!0),
                                  variant: "ghost",
                                  size: "sm",
                                  className:
                                    "text-primary hover:text-primary hover:bg-primary/10 font-medium text-xs sm:text-sm h-auto py-1.5 px-2 sm:px-3 -ml-2",
                                  children: [
                                    (0, r.jsx)($.A, {
                                      className:
                                        "w-3.5 h-3.5 sm:w-4 sm:h-4 mr-1.5 sm:mr-2 flex-shrink-0",
                                    }),
                                    (0, r.jsx)("span", {
                                      className: "break-words text-left",
                                      children: e(
                                        "interview.page.howItWorks.viewPolicy",
                                      ),
                                    }),
                                  ],
                                }),
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                  ],
                }),
                (0, r.jsx)(W, { open: a, onOpenChange: l }),
                (0, r.jsx)(Y.P.div, {
                  initial: { opacity: 0, y: 20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.5, delay: 0.1 },
                  children: (0, r.jsx)(C, {}),
                }),
                (0, r.jsxs)(Y.P.div, {
                  initial: { opacity: 0, y: 20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.5, delay: 0.2 },
                  children: [
                    (0, r.jsx)(B.D, {
                      level: 2,
                      size: "compact",
                      className: "mb-3 sm:mb-4 text-lg sm:text-xl",
                      children: e("interview.page.yourActivity"),
                    }),
                    (0, r.jsx)(U, {}),
                  ],
                }),
                (0, r.jsx)(Y.P.div, {
                  initial: { opacity: 0, y: 20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.5, delay: 0.25 },
                  className: "mt-4 sm:mt-6",
                  children: (0, r.jsx)("div", {
                    className:
                      "bg-gradient-to-br from-beige via-background to-beige border border-primary/20 rounded-xl p-4 sm:p-6",
                    children: (0, r.jsxs)("div", {
                      className: "flex flex-col sm:flex-row items-start gap-4",
                      children: [
                        (0, r.jsx)("div", {
                          className: "p-3 rounded-lg bg-primary/10 shrink-0",
                          children: (0, r.jsx)(V.A, {
                            className: "h-6 w-6 text-primary",
                          }),
                        }),
                        (0, r.jsxs)("div", {
                          className: "flex-1",
                          children: [
                            (0, r.jsxs)("div", {
                              className:
                                "flex flex-col sm:flex-row sm:items-center gap-2 mb-2",
                              children: [
                                (0, r.jsx)(B.D, {
                                  level: 3,
                                  className: "text-base sm:text-lg",
                                  children: e(
                                    "interview.page.videoStudio.title",
                                  ),
                                }),
                                (0, r.jsx)(G.E, {
                                  className: "bg-secondary text-xs self-start",
                                  children: e("interview.page.videoStudio.new"),
                                }),
                              ],
                            }),
                            (0, r.jsx)(z.f, {
                              className:
                                "text-muted-foreground mb-4 text-xs sm:text-sm leading-relaxed",
                              children: e(
                                "interview.page.videoStudio.description",
                              ),
                            }),
                            (0, r.jsx)(x.$, {
                              asChild: !0,
                              className:
                                "rounded-full w-full sm:w-auto min-h-[44px]",
                              children: (0, r.jsxs)(X(), {
                                href: "/dashboard/video-studio",
                                className: "inline-flex items-center gap-2",
                                children: [
                                  e("interview.page.videoStudio.tryButton"),
                                  (0, r.jsx)(q.A, { className: "h-4 w-4" }),
                                ],
                              }),
                            }),
                          ],
                        }),
                      ],
                    }),
                  }),
                }),
                (0, r.jsx)(Y.P.div, {
                  initial: { opacity: 0, y: 20 },
                  animate: { opacity: 1, y: 0 },
                  transition: { duration: 0.5, delay: 0.3 },
                  className:
                    "w-full -mx-3 sm:-mx-4 px-3 sm:px-4 mt-4 sm:mt-6 md:mt-8",
                  children: (0, r.jsx)("div", {
                    className:
                      "bg-primary rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 lg:p-12",
                    children: (0, r.jsx)("div", {
                      className: "max-w-5xl mx-auto",
                      children: (0, r.jsxs)("div", {
                        className:
                          "flex flex-col md:flex-row items-center gap-4 sm:gap-6 md:gap-8",
                        children: [
                          (0, r.jsx)("div", {
                            className: "flex-shrink-0",
                            children: (0, r.jsx)("div", {
                              className:
                                "relative w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40",
                              children: (0, r.jsx)(n.default, {
                                src: "/mascot/mascot_thinking_female.webp",
                                alt: "Young Oak explaining the change",
                                fill: !0,
                                className: "object-contain",
                              }),
                            }),
                          }),
                          (0, r.jsxs)("div", {
                            className: "flex-1 text-center md:text-left",
                            children: [
                              (0, r.jsx)(B.D, {
                                level: 2,
                                className:
                                  "text-white mb-3 sm:mb-4 text-lg sm:text-xl md:text-2xl",
                                children: e("interview.page.whyChange.title"),
                              }),
                              (0, r.jsx)(z.f, {
                                className:
                                  "text-white leading-relaxed mb-4 sm:mb-6 text-sm sm:text-base",
                                children: e(
                                  "interview.page.whyChange.description",
                                ),
                              }),
                              (0, r.jsxs)("div", {
                                className:
                                  "grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4",
                                children: [
                                  (0, r.jsxs)("div", {
                                    className:
                                      "flex items-start gap-2 sm:gap-3 bg-[#E5890F] rounded-lg sm:rounded-xl p-3 sm:p-4",
                                    children: [
                                      (0, r.jsx)("span", {
                                        className:
                                          "text-white text-lg sm:text-xl flex-shrink-0",
                                        children: "✓",
                                      }),
                                      (0, r.jsx)("span", {
                                        className:
                                          "text-white font-medium text-xs sm:text-sm",
                                        children: e(
                                          "interview.page.whyChange.reliable",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, r.jsxs)("div", {
                                    className:
                                      "flex items-start gap-2 sm:gap-3 bg-[#E5890F] rounded-lg sm:rounded-xl p-3 sm:p-4",
                                    children: [
                                      (0, r.jsx)("span", {
                                        className:
                                          "text-white text-lg sm:text-xl flex-shrink-0",
                                        children: "✓",
                                      }),
                                      (0, r.jsx)("span", {
                                        className:
                                          "text-white font-medium text-xs sm:text-sm",
                                        children: e(
                                          "interview.page.whyChange.enhanced",
                                        ),
                                      }),
                                    ],
                                  }),
                                  (0, r.jsxs)("div", {
                                    className:
                                      "flex items-start gap-2 sm:gap-3 bg-[#E5890F] rounded-lg sm:rounded-xl p-3 sm:p-4",
                                    children: [
                                      (0, r.jsx)("span", {
                                        className:
                                          "text-white text-lg sm:text-xl flex-shrink-0",
                                        children: "✓",
                                      }),
                                      (0, r.jsx)("span", {
                                        className:
                                          "text-white font-medium text-xs sm:text-sm",
                                        children: e(
                                          "interview.page.whyChange.priority",
                                        ),
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
                  }),
                }),
              ],
            });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(16261)),
      (_N_E = e.O()));
  },
]);
