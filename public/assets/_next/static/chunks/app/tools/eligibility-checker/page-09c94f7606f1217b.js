(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [22738],
  {
    3644: (e, i, n) => {
      Promise.resolve().then(n.bind(n, 36184));
    },
    36184: (e, i, n) => {
      "use strict";
      (n.r(i), n.d(i, { default: () => q }));
      var t = n(70207),
        a = n(87223),
        o = n(26928),
        r = n(27239),
        l = n(70005),
        s = n(82164),
        c = n(84217),
        u = n(30478),
        d = n(81994),
        g = n(88117),
        h = n(1701),
        m = n(79650),
        p = n(27774),
        b = n(14207);
      let y = (0, o.default)(
          () =>
            Promise.all([n.e(46593), n.e(36209), n.e(84121), n.e(72076)])
              .then(n.bind(n, 29403))
              .then((e) => ({ default: e.EnhancedQuestionnaireContainer })),
          {
            loadableGenerated: { webpack: () => [29403] },
            loading: () =>
              (0, t.jsx)("div", {
                className: "h-96 w-full bg-muted/30 animate-pulse rounded-xl",
              }),
          },
        ),
        f = (0, o.default)(
          () =>
            Promise.all([n.e(84121), n.e(72076)])
              .then(n.bind(n, 80374))
              .then((e) => ({ default: e.HowItWorksSection })),
          {
            loadableGenerated: { webpack: () => [80374] },
            loading: () =>
              (0, t.jsx)("div", {
                className: "h-64 w-full bg-muted/30 animate-pulse rounded-xl",
              }),
          },
        ),
        v = (0, o.default)(
          () =>
            Promise.all([n.e(84121), n.e(72076)])
              .then(n.bind(n, 79046))
              .then((e) => ({ default: e.RelatedTools })),
          {
            loadableGenerated: { webpack: () => [79046] },
            loading: () =>
              (0, t.jsx)("div", {
                className: "h-64 w-full bg-muted/30 animate-pulse rounded-xl",
              }),
          },
        ),
        A = (0, o.default)(
          () =>
            Promise.all([n.e(84121), n.e(72076)])
              .then(n.bind(n, 10863))
              .then((e) => ({ default: e.ToolFAQSection })),
          {
            loadableGenerated: { webpack: () => [10863] },
            loading: () =>
              (0, t.jsx)("div", {
                className: "h-64 w-full bg-muted/30 animate-pulse rounded-xl",
              }),
          },
        ),
        w = [
          {
            question: "What is the Ausbildung Eligibility Checker?",
            answer:
              "The Ausbildung Eligibility Checker is a free online tool that helps you determine if you qualify for German vocational training (Ausbildung) programs. It analyzes your age, education level, German language proficiency, current location, and preferred sectors to provide instant personalized eligibility results and recommendations.",
          },
          {
            question:
              "What are the basic requirements for Ausbildung in Germany?",
            answer:
              "To be eligible for Ausbildung in Germany, you typically need: (1) Completion of secondary education (10th or 12th grade), (2) German language proficiency at B1 or B2 level depending on the sector, (3) Age between 18-35 years (though there is no strict age limit), (4) Valid passport and ability to obtain a visa, (5) Financial proof including a blocked account of €11,904 for 2025.",
          },
          {
            question: "Is there an age limit for Ausbildung in Germany?",
            answer:
              "There is no official age limit for Ausbildung in Germany. However, most applicants are between 18-30 years old. Applicants aged 31-35 may face additional scrutiny during visa processing but are still eligible. Those above 35 may have reduced chances but can still apply, especially if they have relevant experience or qualifications.",
          },
          {
            question: "What German language level do I need for Ausbildung?",
            answer:
              "The required German language level depends on your chosen sector. Most Ausbildung programs require B1 level (CEFR), while healthcare sectors like nursing typically require B2 level. Technical sectors may sometimes accept A2 level if combined with strong technical skills. The eligibility checker evaluates your language level against sector-specific requirements.",
          },
          {
            question:
              "Can I do Ausbildung in Germany with 10th grade education?",
            answer:
              "Yes, you can pursue Ausbildung in Germany with 10th grade (secondary school) education. Many vocational training programs accept candidates who have completed 10 years of schooling. However, having 12th grade (higher secondary) education may improve your chances and open up more opportunities in competitive sectors.",
          },
          {
            question: "How accurate is the eligibility checker?",
            answer:
              "The eligibility checker is highly accurate and based on official requirements from German authorities, including IHK (German Chamber of Commerce), DAAD, and the German Federal Foreign Office. It provides realistic assessments based on current immigration policies and Ausbildung program requirements. However, final eligibility is determined by the training company and visa authorities.",
          },
          {
            question: "What happens after I complete the eligibility check?",
            answer:
              "After completing the eligibility check, you will receive: (1) Instant eligibility status (Highly Eligible, Eligible with Conditions, or Limited Eligibility), (2) Personalized recommendations for improving your application, (3) Suggested Ausbildung sectors matching your profile, (4) Next steps guidance including document preparation and application timeline, (5) Option to save or share your results.",
          },
          {
            question:
              "Do I need to create an account to use the eligibility checker?",
            answer:
              "No, you do not need to create an account to use the eligibility checker. The tool is completely free and works without registration. However, you can optionally provide your email at the end to save your results, receive personalized guidance, and get updates about relevant Ausbildung opportunities.",
          },
          {
            question:
              "Can I check eligibility for specific Ausbildung sectors?",
            answer:
              "Yes, the eligibility checker allows you to select your preferred Ausbildung sectors such as Healthcare, IT & Technology, Engineering, Hospitality, Business Administration, and more. It then evaluates your qualifications against sector-specific requirements and provides targeted recommendations for those sectors.",
          },
          {
            question: "What if I am not eligible for Ausbildung?",
            answer:
              "If the checker indicates limited eligibility, do not worry. You will receive specific recommendations on how to improve your profile, such as: improving your German language level, completing additional education, gaining relevant work experience, or considering alternative sectors. Many candidates successfully qualify after addressing the identified gaps.",
          },
        ],
        k = {
          title: "How to Use the Eligibility Checker",
          description:
            "Check if you qualify for German Ausbildung based on age, education, language skills, and other requirements. Get instant results.",
          steps: [
            {
              title: "Enter Your Profile",
              description:
                "Provide basic information about your education, age, and German language skills.",
              icon: r.A,
            },
            {
              title: "Answer Questions",
              description:
                "Complete the questionnaire about your qualifications and preferences.",
              icon: l.A,
            },
            {
              title: "Get Eligibility Result",
              description:
                "Receive instant personalized results with recommendations and next steps.",
              icon: s.A,
            },
          ],
          inputs: [
            { label: "Age", description: "Your current age", icon: c.A },
            {
              label: "Education Level",
              description: "10th grade, 12th grade, or higher",
              icon: u.A,
            },
            {
              label: "German Level",
              description: "A1, A2, B1, B2, or higher",
              icon: d.A,
            },
            {
              label: "Work Experience",
              description: "Previous work experience in your field",
              icon: g.A,
            },
            {
              label: "Nationality",
              description: "Your country of origin",
              icon: h.A,
            },
            {
              label: "Field of Interest",
              description: "Preferred Ausbildung sectors",
              icon: m.A,
            },
          ],
          outputs: [
            {
              label: "Eligibility Status",
              description:
                "Highly Eligible, Eligible with Conditions, or Limited Eligibility",
              icon: l.A,
            },
            {
              label: "Requirements Met",
              description: "Which requirements you already satisfy",
              icon: s.A,
            },
            {
              label: "Missing Requirements",
              description: "What you need to improve",
              icon: r.A,
            },
            {
              label: "Next Steps",
              description: "Personalized action plan",
              icon: g.A,
            },
          ],
          additionalInfo:
            "Eligibility criteria are based on official German visa requirements and Ausbildung regulations for 2026. Results are indicative only.",
        };
      function q() {
        let [e, i] = (0, a.useState)(!1);
        return (0, t.jsxs)(p.d, {
          title: "Ausbildung Eligibility Checker for Germany",
          description:
            "Check if you qualify for German Ausbildung (vocational training) programs. Instant assessment based on age, education, language skills, and more.",
          icon: l.A,
          category: "Assessment Tools",
          toolSlug: "eligibility-checker",
          children: [
            (0, t.jsx)("div", {
              className: "mb-8",
              children: (0, t.jsx)(y, {
                onToolStart: () => {
                  i(!0);
                },
              }),
            }),
            !e && (0, t.jsx)(f, { content: k }),
            (0, t.jsx)(b.CTASection, {
              title: "Discover Your Perfect Match",
              description:
                "Browse verified Ausbildung positions from German employers on our platform. Find roles that align with your eligibility profile and career aspirations.",
              action: {
                text: "Browse Jobs",
                href: "/dashboard/jobs",
                variant: "default",
              },
              secondaryAction: {
                text: "Check Eligibility",
                href: "#top",
                variant: "outline",
              },
              backgroundImage: "/images/arbeitgeber-hero-background.webp",
            }),
            (0, t.jsx)(A, { faqs: w, className: "mb-8" }),
            (0, t.jsx)(v, { currentToolSlug: "eligibility-checker", limit: 3 }),
          ],
        });
      }
    },
  },
  (e) => {
    var i = (i) => e((e.s = i));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => i(3644)),
      (_N_E = e.O()));
  },
]);
