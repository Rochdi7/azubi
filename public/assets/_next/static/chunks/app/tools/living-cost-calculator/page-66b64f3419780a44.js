(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [70931],
  {
    36011: (e, t, i) => {
      "use strict";
      i.d(t, { LivingCostCalculatorClient: () => _ });
      var n = i(70207),
        a = i(87223),
        o = i(1701),
        r = i(54573),
        s = i(33482),
        l = i(5101),
        m = i(20468),
        d = i(34379),
        c = i(67926),
        u = i(84217),
        h = i(65915),
        x = i(69230),
        p = i(95992),
        f = i(10386),
        g = i(79024),
        b = i(62165),
        y = i(27774),
        v = i(10863),
        j = i(20351),
        N = i(93595),
        w = i(80374),
        C = i(79046),
        A = i(39441),
        k = i(87277),
        I = i(93501),
        S = i(40167),
        M = i(41082),
        T = i(11647),
        L = i(90937),
        F = i(34075),
        G = i(32730),
        D = i(60849),
        q = i(2880),
        B = i(77369),
        H = i(33286),
        z = i(18289),
        E = i(99003),
        P = i(79415);
      let W = [
          {
            question:
              "How much does it cost to live in Germany as an Ausbildung trainee in 2026?",
            answer:
              "Living costs for Ausbildung trainees in Germany range from €800-2,200 per month depending on the city and lifestyle. In affordable cities like Leipzig or Dresden, you can live comfortably on €900-1,300/month. In expensive cities like Munich or Frankfurt, expect €1,600-2,200/month. Most trainees earn €900-1,300/month during Ausbildung, which covers basic living costs in moderate-cost cities. The official blocked account requirement is €992/month (€11,904/year) for visa purposes.",
          },
          {
            question:
              "Which German cities are most affordable for Ausbildung trainees?",
            answer:
              "The most affordable German cities for Ausbildung are Leipzig (€900-1,300/month), Dresden (€850-1,250/month), Bochum (€800-1,200/month), Chemnitz (€780-1,180/month), and Erfurt (€850-1,280/month). These Tier 4 cities offer significantly lower rent (€300-500 for shared apartments vs €500-800 in Munich), cheaper food, and lower transportation costs. Despite lower costs, these cities have strong Ausbildung opportunities in manufacturing, healthcare, IT, and engineering sectors.",
          },
          {
            question:
              "Can I survive on my Ausbildung stipend alone without additional income?",
            answer:
              "Yes, but it depends on the city and your lifestyle choices. In affordable cities (Leipzig, Dresden, Bochum), an Ausbildung stipend of €1,000-1,200/month covers all basic living costs comfortably. In moderate-cost cities (Berlin, Hannover), you can manage with careful budgeting. In expensive cities (Munich, Frankfurt), your stipend may not fully cover living costs, creating a monthly deficit of €200-400. Many trainees work part-time (up to 20 hours/week allowed) to supplement income, earning an additional €400-600/month at €12-15/hour.",
          },
          {
            question:
              "What is included in the €992/month visa requirement for Germany?",
            answer:
              "The €992/month (€11,904/year) blocked account requirement is the minimum financial proof required for a German student/Ausbildung visa in 2026. This amount must be deposited before visa application and covers basic living expenses including accommodation (€350-600), food (€200-300), health insurance (€120), transportation (€30-50), and miscellaneous costs (€100-200). However, actual living costs often exceed this amount in expensive cities like Munich or Hamburg, where €1,500-2,000/month is more realistic.",
          },
          {
            question: "How do living costs vary between Munich and Leipzig?",
            answer:
              "Munich is 50-80% more expensive than Leipzig. In Munich, shared apartments cost €500-800/month vs €330-520 in Leipzig. Total monthly costs in Munich average €1,600-2,200 (budget to comfortable lifestyle) compared to €900-1,300 in Leipzig. Specific differences: rent is €300-400 higher, food costs 15-20% more, and miscellaneous expenses are 30-40% higher in Munich. However, Munich offers higher Ausbildung stipends (€1,200-1,500 vs €900-1,100) and better post-Ausbildung salaries, partially offsetting the cost difference.",
          },
          {
            question:
              "Is student accommodation (dormitory) cheaper than private apartments in Germany?",
            answer:
              "Yes, student dormitories are significantly cheaper, costing €180-500/month compared to €500-1,500 for private studios or €300-800 for shared apartments. Dormitories typically include utilities, internet, and sometimes furniture, making them the most cost-effective option. However, dormitory availability is limited with waiting lists of 6-12 months in popular cities. Shared apartments (WG - Wohngemeinschaft) offer a good middle ground at €300-600/month, combining affordability with independence and social interaction with roommates.",
          },
          {
            question:
              "What are typical food costs for Ausbildung trainees in Germany in 2026?",
            answer:
              "Food costs range from €125-450/month depending on lifestyle. Budget lifestyle (cooking at home, discount supermarkets like Aldi/Lidl): €125-220/month. Moderate lifestyle (mix of cooking and occasional dining out): €175-320/month. Comfortable lifestyle (regular dining out, premium groceries): €255-450/month. Tips to save: use student Mensas (€2.50-5/meal), shop at discount supermarkets, use apps like Too Good To Go for discounted food, join Foodsharing networks, and cook in batches to reduce waste.",
          },
          {
            question:
              "Can I work part-time during Ausbildung to cover additional living costs?",
            answer:
              "Yes, Ausbildung trainees can work part-time up to 20 hours per week (120 full days or 240 half days per year) without affecting visa status. Typical part-time wages are €12-15/hour (minimum wage €12.82 in 2026), generating €400-600/month additional income. Popular part-time jobs: weekend shifts at hospitals/care homes (€15-18/hour), retail/hospitality (€12-14/hour), tutoring (€15-25/hour), delivery services (€13-16/hour). Important: Check with your Ausbildung employer first, as some contracts may restrict additional employment during training hours.",
          },
          {
            question:
              "What initial costs should I budget for my first month in Germany?",
            answer:
              "First-month costs are significantly higher than regular monthly expenses. Budget €2,500-4,500 for initial setup: Security deposit (3 months rent: €900-2,400), first month rent (€300-800), registration fees (€30-50), health insurance activation (€120), residence permit application (€100), bedding/kitchenware (€200-400), winter clothing (€150-300), German SIM card (€10-30), bike or transport ticket (€30-100), and emergency buffer (€300-500). Plan to have this amount PLUS the €11,904 blocked account ready before arrival.",
          },
          {
            question:
              "How much should I save before arriving in Germany for Ausbildung?",
            answer:
              "Save €14,000-17,000 total before arrival: €11,904 for blocked account (visa requirement), €2,500-4,500 for first-month setup costs, and €500-1,000 emergency buffer for unexpected expenses. This ensures financial security during the first 2-3 months while you settle, find accommodation, and receive your first Ausbildung stipend (usually paid at month-end). If possible, save an additional €2,000-3,000 for flexibility with accommodation choices and to avoid financial stress during the adjustment period. Consider currency exchange rates when transferring funds from your home country.",
          },
        ],
        Y = {
          munich: {
            id: "munich",
            name: "Munich",
            tier: "Tier 1 - Most Expensive",
            tierLevel: 1,
            accommodation: {
              dormitory: { min: 350, max: 500 },
              shared: { min: 500, max: 800 },
              studio: { min: 800, max: 1200 },
              apartment: { min: 1200, max: 1800 },
            },
            food: {
              budget: { min: 180, max: 220 },
              moderate: { min: 250, max: 320 },
              comfortable: { min: 350, max: 450 },
            },
            transportation: 49,
            healthInsurance: 120,
            utilities: 150,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 50, max: 80 },
              moderate: { min: 100, max: 150 },
              comfortable: { min: 180, max: 250 },
            },
            description:
              "Capital of Bavaria, highest living costs in Germany, strong job market, excellent quality of life",
          },
          frankfurt: {
            id: "frankfurt",
            name: "Frankfurt",
            tier: "Tier 1 - Most Expensive",
            tierLevel: 1,
            accommodation: {
              dormitory: { min: 320, max: 480 },
              shared: { min: 480, max: 750 },
              studio: { min: 750, max: 1150 },
              apartment: { min: 1100, max: 1700 },
            },
            food: {
              budget: { min: 170, max: 210 },
              moderate: { min: 240, max: 310 },
              comfortable: { min: 330, max: 430 },
            },
            transportation: 51,
            healthInsurance: 120,
            utilities: 140,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 50, max: 75 },
              moderate: { min: 95, max: 140 },
              comfortable: { min: 170, max: 240 },
            },
            description:
              "Financial hub, international atmosphere, high salaries, expensive housing",
          },
          hamburg: {
            id: "hamburg",
            name: "Hamburg",
            tier: "Tier 2 - High Cost",
            tierLevel: 2,
            accommodation: {
              dormitory: { min: 300, max: 450 },
              shared: { min: 450, max: 700 },
              studio: { min: 700, max: 1100 },
              apartment: { min: 1e3, max: 1500 },
            },
            food: {
              budget: { min: 160, max: 200 },
              moderate: { min: 230, max: 290 },
              comfortable: { min: 320, max: 410 },
            },
            transportation: 39,
            healthInsurance: 120,
            utilities: 135,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 45, max: 70 },
              moderate: { min: 90, max: 130 },
              comfortable: { min: 160, max: 230 },
            },
            description:
              "Port city, second-largest in Germany, vibrant culture, good job opportunities",
          },
          stuttgart: {
            id: "stuttgart",
            name: "Stuttgart",
            tier: "Tier 2 - High Cost",
            tierLevel: 2,
            accommodation: {
              dormitory: { min: 290, max: 430 },
              shared: { min: 440, max: 680 },
              studio: { min: 680, max: 1050 },
              apartment: { min: 950, max: 1450 },
            },
            food: {
              budget: { min: 165, max: 205 },
              moderate: { min: 235, max: 295 },
              comfortable: { min: 325, max: 415 },
            },
            transportation: 43,
            healthInsurance: 120,
            utilities: 130,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 45, max: 70 },
              moderate: { min: 88, max: 128 },
              comfortable: { min: 155, max: 225 },
            },
            description:
              "Automotive industry hub (Mercedes, Porsche), strong economy, hilly landscape",
          },
          cologne: {
            id: "cologne",
            name: "Cologne",
            tier: "Tier 2 - High Cost",
            tierLevel: 2,
            accommodation: {
              dormitory: { min: 280, max: 420 },
              shared: { min: 420, max: 650 },
              studio: { min: 650, max: 1e3 },
              apartment: { min: 900, max: 1400 },
            },
            food: {
              budget: { min: 160, max: 200 },
              moderate: { min: 225, max: 285 },
              comfortable: { min: 315, max: 405 },
            },
            transportation: 38,
            healthInsurance: 120,
            utilities: 125,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 45, max: 68 },
              moderate: { min: 85, max: 125 },
              comfortable: { min: 150, max: 220 },
            },
            description:
              "Cultural center, carnival city, media industry, cathedral landmark",
          },
          berlin: {
            id: "berlin",
            name: "Berlin",
            tier: "Tier 3 - Moderate Cost",
            tierLevel: 3,
            accommodation: {
              dormitory: { min: 250, max: 400 },
              shared: { min: 400, max: 650 },
              studio: { min: 650, max: 950 },
              apartment: { min: 900, max: 1400 },
            },
            food: {
              budget: { min: 150, max: 190 },
              moderate: { min: 210, max: 270 },
              comfortable: { min: 300, max: 390 },
            },
            transportation: 35,
            healthInsurance: 120,
            utilities: 120,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 40, max: 65 },
              moderate: { min: 80, max: 120 },
              comfortable: { min: 145, max: 210 },
            },
            description:
              "Capital city, startup hub, diverse culture, improving but still moderate costs",
          },
          dusseldorf: {
            id: "dusseldorf",
            name: "D\xfcsseldorf",
            tier: "Tier 3 - Moderate Cost",
            tierLevel: 3,
            accommodation: {
              dormitory: { min: 270, max: 410 },
              shared: { min: 410, max: 630 },
              studio: { min: 630, max: 980 },
              apartment: { min: 880, max: 1350 },
            },
            food: {
              budget: { min: 155, max: 195 },
              moderate: { min: 220, max: 280 },
              comfortable: { min: 310, max: 400 },
            },
            transportation: 37,
            healthInsurance: 120,
            utilities: 125,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 42, max: 66 },
              moderate: { min: 82, max: 122 },
              comfortable: { min: 148, max: 215 },
            },
            description:
              "Fashion and art hub, Japanese community, Rhine river, business center",
          },
          hannover: {
            id: "hannover",
            name: "Hannover",
            tier: "Tier 3 - Moderate Cost",
            tierLevel: 3,
            accommodation: {
              dormitory: { min: 240, max: 380 },
              shared: { min: 380, max: 590 },
              studio: { min: 590, max: 910 },
              apartment: { min: 820, max: 1280 },
            },
            food: {
              budget: { min: 145, max: 185 },
              moderate: { min: 205, max: 265 },
              comfortable: { min: 290, max: 380 },
            },
            transportation: 33,
            healthInsurance: 120,
            utilities: 115,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 38, max: 62 },
              moderate: { min: 75, max: 115 },
              comfortable: { min: 138, max: 200 },
            },
            description:
              "Central location, trade fair city, good transport connections, affordable living",
          },
          nuremberg: {
            id: "nuremberg",
            name: "Nuremberg",
            tier: "Tier 3 - Moderate Cost",
            tierLevel: 3,
            accommodation: {
              dormitory: { min: 245, max: 385 },
              shared: { min: 385, max: 600 },
              studio: { min: 600, max: 920 },
              apartment: { min: 830, max: 1300 },
            },
            food: {
              budget: { min: 148, max: 188 },
              moderate: { min: 208, max: 268 },
              comfortable: { min: 295, max: 385 },
            },
            transportation: 36,
            healthInsurance: 120,
            utilities: 118,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 40, max: 64 },
              moderate: { min: 78, max: 118 },
              comfortable: { min: 142, max: 205 },
            },
            description:
              "Bavarian city, historic old town, technology hub, Christmas market famous",
          },
          essen: {
            id: "essen",
            name: "Essen",
            tier: "Tier 3 - Moderate Cost",
            tierLevel: 3,
            accommodation: {
              dormitory: { min: 230, max: 370 },
              shared: { min: 370, max: 580 },
              studio: { min: 580, max: 890 },
              apartment: { min: 800, max: 1250 },
            },
            food: {
              budget: { min: 142, max: 182 },
              moderate: { min: 200, max: 260 },
              comfortable: { min: 285, max: 375 },
            },
            transportation: 32,
            healthInsurance: 120,
            utilities: 112,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 38, max: 60 },
              moderate: { min: 73, max: 113 },
              comfortable: { min: 135, max: 198 },
            },
            description:
              "Ruhr area, industrial history, green capital, affordable and accessible",
          },
          leipzig: {
            id: "leipzig",
            name: "Leipzig",
            tier: "Tier 4 - Most Affordable",
            tierLevel: 4,
            accommodation: {
              dormitory: { min: 200, max: 330 },
              shared: { min: 330, max: 520 },
              studio: { min: 520, max: 800 },
              apartment: { min: 720, max: 1150 },
            },
            food: {
              budget: { min: 135, max: 175 },
              moderate: { min: 190, max: 250 },
              comfortable: { min: 270, max: 360 },
            },
            transportation: 30,
            healthInsurance: 120,
            utilities: 105,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 35, max: 58 },
              moderate: { min: 68, max: 108 },
              comfortable: { min: 128, max: 190 },
            },
            description:
              "Growing cultural scene, startup-friendly, affordable housing, student-popular",
          },
          dresden: {
            id: "dresden",
            name: "Dresden",
            tier: "Tier 4 - Most Affordable",
            tierLevel: 4,
            accommodation: {
              dormitory: { min: 190, max: 320 },
              shared: { min: 320, max: 510 },
              studio: { min: 510, max: 780 },
              apartment: { min: 700, max: 1120 },
            },
            food: {
              budget: { min: 130, max: 170 },
              moderate: { min: 185, max: 245 },
              comfortable: { min: 265, max: 355 },
            },
            transportation: 28,
            healthInsurance: 120,
            utilities: 100,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 33, max: 56 },
              moderate: { min: 65, max: 105 },
              comfortable: { min: 125, max: 185 },
            },
            description:
              "Baroque architecture, Elbe river, technology sector, very affordable",
          },
          bochum: {
            id: "bochum",
            name: "Bochum",
            tier: "Tier 4 - Most Affordable",
            tierLevel: 4,
            accommodation: {
              dormitory: { min: 180, max: 310 },
              shared: { min: 310, max: 490 },
              studio: { min: 490, max: 760 },
              apartment: { min: 680, max: 1100 },
            },
            food: {
              budget: { min: 128, max: 168 },
              moderate: { min: 180, max: 240 },
              comfortable: { min: 260, max: 350 },
            },
            transportation: 29,
            healthInsurance: 120,
            utilities: 98,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 32, max: 55 },
              moderate: { min: 63, max: 103 },
              comfortable: { min: 122, max: 182 },
            },
            description:
              "Ruhr University, industrial heritage, most affordable major city, student-friendly",
          },
          chemnitz: {
            id: "chemnitz",
            name: "Chemnitz",
            tier: "Tier 4 - Most Affordable",
            tierLevel: 4,
            accommodation: {
              dormitory: { min: 175, max: 300 },
              shared: { min: 300, max: 480 },
              studio: { min: 480, max: 740 },
              apartment: { min: 660, max: 1080 },
            },
            food: {
              budget: { min: 125, max: 165 },
              moderate: { min: 175, max: 235 },
              comfortable: { min: 255, max: 345 },
            },
            transportation: 27,
            healthInsurance: 120,
            utilities: 95,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 30, max: 53 },
              moderate: { min: 60, max: 100 },
              comfortable: { min: 118, max: 178 },
            },
            description:
              "Saxony city, technology university, extremely affordable, industrial revival",
          },
          erfurt: {
            id: "erfurt",
            name: "Erfurt",
            tier: "Tier 4 - Most Affordable",
            tierLevel: 4,
            accommodation: {
              dormitory: { min: 185, max: 315 },
              shared: { min: 315, max: 500 },
              studio: { min: 500, max: 770 },
              apartment: { min: 690, max: 1110 },
            },
            food: {
              budget: { min: 132, max: 172 },
              moderate: { min: 188, max: 248 },
              comfortable: { min: 268, max: 358 },
            },
            transportation: 31,
            healthInsurance: 120,
            utilities: 102,
            phoneInternet: 30,
            miscellaneous: {
              budget: { min: 34, max: 57 },
              moderate: { min: 67, max: 107 },
              comfortable: { min: 127, max: 187 },
            },
            description:
              "Thuringia capital, medieval architecture, affordable living, central Germany location",
          },
        };
      function O(e) {
        return Math.round((e.min + e.max) / 2);
      }
      let R = {
          healthcare: { name: "Healthcare / Nursing", stipend: 1225 },
          it: { name: "IT & Technology", stipend: 1250 },
          engineering: { name: "Engineering & Manufacturing", stipend: 1150 },
          hospitality: { name: "Hospitality & Tourism", stipend: 950 },
          business: { name: "Business Administration", stipend: 1050 },
          construction: { name: "Construction & Trades", stipend: 1100 },
          logistics: { name: "Logistics & Transport", stipend: 1e3 },
          retail: { name: "Retail & Sales", stipend: 900 },
          other: { name: "Other / Custom Amount", stipend: 1e3 },
        },
        J = {
          accommodation: "#5D5DE9",
          food: "#2C3340",
          transport: "#EEF0F4",
          insurance: "#5D5DE9",
          utilities: "#2C3340",
          phone: "#EEF0F4",
          misc: "#F7F8FA",
        },
        K = {
          title: "How to Use the Living Cost Calculator",
          description:
            "Estimate monthly living expenses in different German cities. Compare costs and plan your budget for accommodation, food, transport, and more.",
          steps: [
            {
              title: "Select Your City",
              description:
                "Choose from 15 German cities across 4 cost tiers, from most expensive (Munich, Frankfurt) to most affordable (Leipzig, Dresden).",
              icon: o.A,
            },
            {
              title: "Choose Living Preferences",
              description:
                "Select your accommodation type (dormitory, shared flat, studio, apartment) and lifestyle preferences (budget, moderate, comfortable).",
              icon: r.A,
            },
            {
              title: "Get Cost Breakdown",
              description:
                "Receive detailed monthly cost estimates including rent, food, transport, insurance, utilities, and entertainment. See how your Ausbildung stipend covers expenses.",
              icon: s.A,
            },
          ],
          inputs: [
            {
              label: "City Selection",
              description:
                "Choose from 15 cities across Germany, grouped by cost tier",
              icon: o.A,
            },
            {
              label: "Accommodation Type",
              description:
                "Dormitory, shared apartment (WG), studio, or 1-bedroom apartment",
              icon: r.A,
            },
            {
              label: "Lifestyle Choice",
              description:
                "Budget-conscious, moderate spending, or comfortable lifestyle",
              icon: l.A,
            },
            {
              label: "Monthly Stipend",
              description:
                "Your expected Ausbildung sector and monthly training salary",
              icon: s.A,
            },
          ],
          outputs: [
            {
              label: "Total Monthly Cost",
              description:
                "Complete breakdown of all living expenses in your chosen city",
              icon: s.A,
            },
            {
              label: "Accommodation Costs",
              description: "Rent estimates based on your selected housing type",
              icon: r.A,
            },
            {
              label: "Food & Groceries",
              description:
                "Monthly food expenses based on your lifestyle choice",
              icon: m.A,
            },
            {
              label: "Transport Costs",
              description: "Public transportation and mobility expenses",
              icon: d.A,
            },
            {
              label: "Utilities & Internet",
              description: "Electricity, heating, water, and internet costs",
              icon: c.A,
            },
            {
              label: "Entertainment Budget",
              description:
                "Leisure activities, dining out, and miscellaneous expenses",
              icon: u.A,
            },
          ],
          additionalInfo:
            "Cost estimates are based on 2026 data from official German statistics and student surveys. Actual costs may vary based on lifestyle choices.",
        };
      function _() {
        var e;
        let [t, i] = (0, a.useState)({
            city: "berlin",
            accommodation: "shared",
            lifestyle: "moderate",
            sector: "it",
            customStipend: 1250,
            includeDependent: !1,
          }),
          [l, m] = (0, a.useState)(null),
          d = (e, t) => {
            i((i) => {
              let n = { ...i, [e]: t };
              return (
                "sector" === e &&
                  "other" !== t &&
                  (n.customStipend = R[t].stipend),
                n
              );
            });
          },
          c = l
            ? [
                {
                  name: "Accommodation",
                  value: l.accommodation,
                  color: J.accommodation,
                },
                { name: "Food", value: l.food, color: J.food },
                {
                  name: "Transport",
                  value: l.transportation,
                  color: J.transport,
                },
                {
                  name: "Health Insurance",
                  value: l.healthInsurance,
                  color: J.insurance,
                },
                { name: "Utilities", value: l.utilities, color: J.utilities },
                {
                  name: "Phone/Internet",
                  value: l.phoneInternet,
                  color: J.phone,
                },
                {
                  name: "Miscellaneous",
                  value: l.miscellaneous,
                  color: J.misc,
                },
              ]
            : [],
          u = l
            ? (function (e) {
                let t =
                    arguments.length > 1 && void 0 !== arguments[1]
                      ? arguments[1]
                      : 3,
                  i = Y[e];
                return i
                  ? Object.values(Y)
                      .filter((e) => e.tierLevel > i.tierLevel)
                      .sort((e, t) => e.tierLevel - t.tierLevel)
                      .slice(0, t)
                  : [];
              })(t.city, 3)
            : [],
          _ = u.map((e) => {
            let i = O(e.accommodation[t.accommodation]),
              n = O(e.food[t.lifestyle]),
              a =
                e.transportation +
                e.healthInsurance +
                e.utilities +
                e.phoneInternet +
                O(e.miscellaneous[t.lifestyle]);
            return {
              city: e.name,
              accommodation: i,
              food: n,
              other: a,
              total: i + n + a,
            };
          });
        return (
          l &&
            _.length > 0 &&
            _.unshift({
              city: "".concat(l.city, " (Current)"),
              accommodation: l.accommodation,
              food: l.food,
              other:
                l.transportation +
                l.healthInsurance +
                l.utilities +
                l.phoneInternet +
                l.miscellaneous,
              total: l.totalMonthly,
            }),
          (0, n.jsxs)(y.d, {
            title: "Living Cost Calculator",
            description:
              "Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.",
            icon: s.A,
            category: "Financial Planning",
            toolSlug: "living-cost-calculator",
            children: [
              (0, n.jsx)("section", {
                className:
                  "bg-beige border-2 border-border rounded-xl p-8 mb-8",
                children: (0, n.jsxs)("div", {
                  className: "flex items-start gap-4",
                  children: [
                    (0, n.jsx)("div", {
                      className: "p-4 bg-orange rounded-xl",
                      "aria-hidden": "true",
                      children: (0, n.jsx)(h.A, {
                        className: "h-6 w-6 text-white",
                      }),
                    }),
                    (0, n.jsxs)("div", {
                      children: [
                        (0, n.jsx)("h3", {
                          className: "font-semibold text-secondary mb-2",
                          children: "Official 2026 Cost Data",
                        }),
                        (0, n.jsxs)("p", {
                          className: "text-sm text-muted-foreground",
                          children: [
                            "This calculator uses official data from ",
                            (0, n.jsx)("strong", {
                              className: "text-orange",
                              children:
                                "DAAD and German Federal Statistical Office (Destatis)",
                            }),
                            " for 2026-2027. Costs are based on actual student/trainee expenses. The €992/month blocked account requirement is separate from these calculations. First-month setup costs (€2,500-4,500) are not included in monthly calculations.",
                          ],
                        }),
                      ],
                    }),
                  ],
                }),
              }),
              (0, n.jsxs)(N.tZ, {
                title: "Calculate Your Monthly Costs",
                children: [
                  (0, n.jsxs)("div", {
                    className: "grid md:grid-cols-2 gap-8",
                    children: [
                      (0, n.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, n.jsx)(k.J, {
                            htmlFor: "city",
                            children: "German City",
                          }),
                          (0, n.jsxs)(I.l6, {
                            value: t.city,
                            onValueChange: (e) => d("city", e),
                            children: [
                              (0, n.jsx)(I.bq, {
                                children: (0, n.jsx)(I.yv, {
                                  placeholder: "Select city",
                                }),
                              }),
                              (0, n.jsxs)(I.gC, {
                                children: [
                                  (0, n.jsx)("div", {
                                    className:
                                      "px-2 py-1.5 text-xs font-semibold text-muted-foreground",
                                    children: "Tier 1 - Most Expensive",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "munich",
                                    children: "Munich",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "frankfurt",
                                    children: "Frankfurt",
                                  }),
                                  (0, n.jsx)("div", {
                                    className:
                                      "px-2 py-1.5 text-xs font-semibold text-muted-foreground mt-2",
                                    children: "Tier 2 - High Cost",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "hamburg",
                                    children: "Hamburg",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "stuttgart",
                                    children: "Stuttgart",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "cologne",
                                    children: "Cologne",
                                  }),
                                  (0, n.jsx)("div", {
                                    className:
                                      "px-2 py-1.5 text-xs font-semibold text-muted-foreground mt-2",
                                    children: "Tier 3 - Moderate Cost",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "berlin",
                                    children: "Berlin",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "dusseldorf",
                                    children: "D\xfcsseldorf",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "hannover",
                                    children: "Hannover",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "nuremberg",
                                    children: "Nuremberg",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "essen",
                                    children: "Essen",
                                  }),
                                  (0, n.jsx)("div", {
                                    className:
                                      "px-2 py-1.5 text-xs font-semibold text-muted-foreground mt-2",
                                    children: "Tier 4 - Most Affordable",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "leipzig",
                                    children: "Leipzig ⭐ Popular",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "dresden",
                                    children: "Dresden",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "bochum",
                                    children: "Bochum",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "chemnitz",
                                    children: "Chemnitz",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "erfurt",
                                    children: "Erfurt",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, n.jsx)("p", {
                            className: "text-xs text-muted-foreground",
                            children:
                              null === (e = Y[t.city]) || void 0 === e
                                ? void 0
                                : e.description,
                          }),
                        ],
                      }),
                      (0, n.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, n.jsx)(k.J, {
                            htmlFor: "accommodation",
                            children: "Accommodation Type",
                          }),
                          (0, n.jsxs)(I.l6, {
                            value: t.accommodation,
                            onValueChange: (e) => d("accommodation", e),
                            children: [
                              (0, n.jsx)(I.bq, {
                                children: (0, n.jsx)(I.yv, {
                                  placeholder: "Select accommodation",
                                }),
                              }),
                              (0, n.jsxs)(I.gC, {
                                children: [
                                  (0, n.jsx)(I.eb, {
                                    value: "dormitory",
                                    children: "Student Dormitory (Cheapest)",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "shared",
                                    children: "Shared Apartment / WG (Popular)",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "studio",
                                    children: "Private Studio",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "apartment",
                                    children: "1-Bedroom Apartment",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, n.jsx)("p", {
                            className: "text-xs text-muted-foreground",
                            children:
                              "Shared apartments (WG) are most popular among trainees",
                          }),
                        ],
                      }),
                      (0, n.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, n.jsx)(k.J, {
                            htmlFor: "lifestyle",
                            children: "Lifestyle & Spending",
                          }),
                          (0, n.jsxs)(I.l6, {
                            value: t.lifestyle,
                            onValueChange: (e) => d("lifestyle", e),
                            children: [
                              (0, n.jsx)(I.bq, {
                                children: (0, n.jsx)(I.yv, {
                                  placeholder: "Select lifestyle",
                                }),
                              }),
                              (0, n.jsxs)(I.gC, {
                                children: [
                                  (0, n.jsx)(I.eb, {
                                    value: "budget",
                                    children:
                                      "Budget (Cook at home, minimal extras)",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "moderate",
                                    children:
                                      "Moderate (Mix of cooking + dining out)",
                                  }),
                                  (0, n.jsx)(I.eb, {
                                    value: "comfortable",
                                    children:
                                      "Comfortable (Regular dining out, entertainment)",
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, n.jsx)("p", {
                            className: "text-xs text-muted-foreground",
                            children: "Affects food and miscellaneous spending",
                          }),
                        ],
                      }),
                      (0, n.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, n.jsx)(k.J, {
                            htmlFor: "sector",
                            children: "Ausbildung Sector",
                          }),
                          (0, n.jsxs)(I.l6, {
                            value: t.sector,
                            onValueChange: (e) => d("sector", e),
                            children: [
                              (0, n.jsx)(I.bq, {
                                children: (0, n.jsx)(I.yv, {
                                  placeholder: "Select sector",
                                }),
                              }),
                              (0, n.jsx)(I.gC, {
                                children: Object.entries(R).map((e) => {
                                  let [t, i] = e;
                                  return (0, n.jsxs)(
                                    I.eb,
                                    {
                                      value: t,
                                      children: [
                                        i.name,
                                        " (€",
                                        i.stipend,
                                        "/month avg)",
                                      ],
                                    },
                                    t,
                                  );
                                }),
                              }),
                            ],
                          }),
                          (0, n.jsx)("p", {
                            className: "text-xs text-muted-foreground",
                            children:
                              "Auto-fills average stipend for your sector",
                          }),
                        ],
                      }),
                      (0, n.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, n.jsx)(k.J, {
                            htmlFor: "customStipend",
                            children: "Monthly Stipend (€)",
                          }),
                          (0, n.jsx)(S.p, {
                            id: "customStipend",
                            type: "number",
                            min: "0",
                            max: "3000",
                            value: t.customStipend,
                            onChange: (e) =>
                              d("customStipend", parseInt(e.target.value) || 0),
                          }),
                          (0, n.jsx)("p", {
                            className: "text-xs text-muted-foreground",
                            children: "Your expected monthly Ausbildung income",
                          }),
                        ],
                      }),
                      (0, n.jsxs)("div", {
                        className: "space-y-4",
                        children: [
                          (0, n.jsxs)(k.J, {
                            className: "flex items-center gap-2",
                            children: [
                              (0, n.jsx)(M.S, {
                                checked: t.includeDependent,
                                onCheckedChange: (e) =>
                                  d("includeDependent", e),
                              }),
                              (0, n.jsx)("span", {
                                children: "Include Partner / Dependent",
                              }),
                            ],
                          }),
                          (0, n.jsx)("p", {
                            className: "text-xs text-muted-foreground pl-6",
                            children:
                              "Adds ~40% to total costs (shared accommodation, higher food/misc)",
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, n.jsx)("div", {
                    className: "space-y-4 mt-8",
                    children: (0, n.jsxs)("div", {
                      className: "flex gap-4",
                      children: [
                        (0, n.jsxs)(A.$, {
                          onClick: () => {
                            let e = Y[t.city];
                            if (!e) return;
                            let i = O(e.accommodation[t.accommodation]),
                              n = O(e.food[t.lifestyle]),
                              a = e.transportation,
                              o = e.healthInsurance,
                              r = e.utilities,
                              s = e.phoneInternet,
                              l = O(e.miscellaneous[t.lifestyle]),
                              d = i + n + a + o + r + s + l;
                            t.includeDependent && (d = Math.round(1.4 * d));
                            let c = t.customStipend,
                              u = c - d,
                              h = "",
                              x = !0;
                            (u >= 200
                              ? ((h = "Comfortable"), (x = !0))
                              : u >= 50 && u < 200
                                ? ((h = "Manageable"), (x = !0))
                                : ((h =
                                    u >= -100 && u < 50
                                      ? "Tight"
                                      : "Difficult"),
                                  (x = !1)),
                              m({
                                city: e.name,
                                cityTier: e.tier,
                                accommodation: i,
                                food: n,
                                transportation: a,
                                healthInsurance: o,
                                utilities: r,
                                phoneInternet: s,
                                miscellaneous: l,
                                totalMonthly: d,
                                stipend: c,
                                monthlySurplus: u,
                                annualBalance: 12 * u,
                                isAffordable: x,
                                affordabilityLevel: h,
                              }),
                              (0, j.r)("living-cost-calculator"));
                          },
                          className:
                            "flex-1 bg-orange hover:bg-orange-hover rounded-full",
                          children: [
                            "Calculate Living Costs",
                            (0, n.jsx)(r.A, {
                              className: "ml-2 h-4 w-4",
                              "aria-hidden": "true",
                            }),
                          ],
                        }),
                        l &&
                          (0, n.jsx)(A.$, {
                            onClick: () => {
                              (i({
                                city: "berlin",
                                accommodation: "shared",
                                lifestyle: "moderate",
                                sector: "it",
                                customStipend: 1250,
                                includeDependent: !1,
                              }),
                                m(null));
                            },
                            variant: "outline",
                            className: "rounded-full",
                            children: (0, n.jsx)(x.A, {
                              className: "h-4 w-4",
                              "aria-hidden": "true",
                            }),
                          }),
                      ],
                    }),
                  }),
                ],
              }),
              (0, n.jsx)("div", {
                className: "flex justify-center mb-8",
                children: (0, n.jsx)(j.A, {
                  toolSlug: "living-cost-calculator",
                  actionText: "cost calculations completed",
                }),
              }),
              !l && (0, n.jsx)(w.HowItWorksSection, { content: K }),
              l &&
                (0, n.jsxs)(n.Fragment, {
                  children: [
                    (0, n.jsxs)("section", {
                      className: "border-2 rounded-xl p-8 mb-8 ".concat(
                        l.isAffordable
                          ? (l.monthlySurplus, "bg-beige border-border")
                          : "bg-cream border-border",
                      ),
                      children: [
                        (0, n.jsxs)("div", {
                          className: "flex items-center justify-between mb-4",
                          children: [
                            (0, n.jsxs)("h2", {
                              className:
                                "text-xl font-semibold text-secondary flex items-center gap-2",
                              children: [
                                (0, n.jsx)(o.A, {
                                  className: "h-6 w-6 text-orange",
                                  "aria-hidden": "true",
                                }),
                                l.city,
                                " - ",
                                l.cityTier,
                              ],
                            }),
                            (0, n.jsx)("div", {
                              className:
                                "px-4 py-2 rounded-full font-semibold ".concat(
                                  l.isAffordable
                                    ? l.monthlySurplus >= 200
                                      ? "bg-secondary text-white"
                                      : "bg-orange text-white"
                                    : "bg-secondary text-white",
                                ),
                              children: l.affordabilityLevel,
                            }),
                          ],
                        }),
                        (0, n.jsxs)("div", {
                          className: "grid md:grid-cols-3 gap-8",
                          children: [
                            (0, n.jsxs)("div", {
                              children: [
                                (0, n.jsx)("div", {
                                  className:
                                    "text-sm text-muted-foreground mb-1",
                                  children: "Monthly Stipend",
                                }),
                                (0, n.jsxs)("div", {
                                  className:
                                    "text-3xl font-bold text-secondary",
                                  children: ["€", l.stipend.toLocaleString()],
                                }),
                              ],
                            }),
                            (0, n.jsxs)("div", {
                              children: [
                                (0, n.jsx)("div", {
                                  className:
                                    "text-sm text-muted-foreground mb-1",
                                  children: "Total Monthly Cost",
                                }),
                                (0, n.jsxs)("div", {
                                  className:
                                    "text-3xl font-bold text-secondary",
                                  children: [
                                    "€",
                                    l.totalMonthly.toLocaleString(),
                                  ],
                                }),
                              ],
                            }),
                            (0, n.jsxs)("div", {
                              children: [
                                (0, n.jsxs)("div", {
                                  className:
                                    "text-sm text-muted-foreground mb-1",
                                  children: [
                                    "Monthly ",
                                    l.monthlySurplus >= 0
                                      ? "Surplus"
                                      : "Deficit",
                                  ],
                                }),
                                (0, n.jsxs)("div", {
                                  className: "text-3xl font-bold ".concat(
                                    l.monthlySurplus >= 0
                                      ? "text-secondary"
                                      : "text-muted-foreground",
                                  ),
                                  children: [
                                    l.monthlySurplus >= 0 ? "+" : "",
                                    "€",
                                    l.monthlySurplus.toLocaleString(),
                                  ],
                                }),
                                (0, n.jsxs)("div", {
                                  className:
                                    "text-xs text-muted-foreground mt-1",
                                  children: [
                                    "Annual: ",
                                    l.annualBalance >= 0 ? "+" : "",
                                    "€",
                                    l.annualBalance.toLocaleString(),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        !l.isAffordable &&
                          (0, n.jsxs)("div", {
                            className:
                              "mt-4 p-4 bg-card rounded-xl border-2 border-border flex items-start gap-4",
                            children: [
                              (0, n.jsx)(p.A, {
                                className:
                                  "h-5 w-5 text-orange shrink-0 mt-0.5",
                                "aria-hidden": "true",
                              }),
                              (0, n.jsxs)("div", {
                                className: "text-sm",
                                children: [
                                  (0, n.jsx)("strong", {
                                    className: "text-secondary",
                                    children: "Financial Alert:",
                                  }),
                                  (0, n.jsxs)("span", {
                                    className: "text-muted-foreground",
                                    children: [
                                      " Your stipend may not fully cover living costs in ",
                                      l.city,
                                      ". Consider part-time work (€400-600/month additional) or choose a more affordable city.",
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                      ],
                    }),
                    (0, n.jsx)(N.Q$, {
                      title: "Cost Breakdown",
                      icon: f.A,
                      children: (0, n.jsxs)("div", {
                        className: "grid md:grid-cols-2 gap-8",
                        children: [
                          (0, n.jsx)("div", {
                            children: (0, n.jsx)(T.u, {
                              width: "100%",
                              height: 300,
                              children: (0, n.jsxs)(L.r, {
                                children: [
                                  (0, n.jsx)(F.F, {
                                    data: c,
                                    dataKey: "value",
                                    nameKey: "name",
                                    cx: "50%",
                                    cy: "50%",
                                    outerRadius: 100,
                                    label: (e) => {
                                      let { name: t, percent: i } = e;
                                      return ""
                                        .concat(t, " ")
                                        .concat((100 * i).toFixed(0), "%");
                                    },
                                    labelLine: !1,
                                    children: c.map((e, t) =>
                                      (0, n.jsx)(
                                        G.f,
                                        { fill: e.color },
                                        "cell-".concat(t),
                                      ),
                                    ),
                                  }),
                                  (0, n.jsx)(D.m, {
                                    formatter: (e) => "€".concat(e),
                                  }),
                                ],
                              }),
                            }),
                          }),
                          (0, n.jsxs)("div", {
                            className: "space-y-4",
                            children: [
                              c.map((e) =>
                                (0, n.jsxs)(
                                  "div",
                                  {
                                    className:
                                      "flex justify-between items-center p-4 bg-cream rounded-xl",
                                    children: [
                                      (0, n.jsxs)("div", {
                                        className: "flex items-center gap-4",
                                        children: [
                                          (0, n.jsx)("div", {
                                            className: "w-4 h-4 rounded",
                                            style: { backgroundColor: e.color },
                                          }),
                                          (0, n.jsx)("span", {
                                            className:
                                              "text-sm text-muted-foreground",
                                            children: e.name,
                                          }),
                                        ],
                                      }),
                                      (0, n.jsxs)("div", {
                                        className:
                                          "font-semibold text-secondary",
                                        children: ["€", e.value],
                                      }),
                                    ],
                                  },
                                  e.name,
                                ),
                              ),
                              (0, n.jsxs)("div", {
                                className:
                                  "flex justify-between items-center p-4 bg-beige border-2 border-border rounded-xl mt-4",
                                children: [
                                  (0, n.jsx)("span", {
                                    className: "font-semibold text-secondary",
                                    children: "Total Monthly",
                                  }),
                                  (0, n.jsxs)("span", {
                                    className: "text-xl font-bold text-orange",
                                    children: [
                                      "€",
                                      l.totalMonthly.toLocaleString(),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                    }),
                    u.length > 0 &&
                      (0, n.jsx)(N.Q$, {
                        title: "Cheaper City Alternatives",
                        icon: g.A,
                        children:
                          _.length > 0 &&
                          (0, n.jsxs)(n.Fragment, {
                            children: [
                              (0, n.jsx)(T.u, {
                                width: "100%",
                                height: 300,
                                children: (0, n.jsxs)(q.E, {
                                  data: _,
                                  children: [
                                    (0, n.jsx)(B.d, { strokeDasharray: "3 3" }),
                                    (0, n.jsx)(H.W, {
                                      dataKey: "city",
                                      angle: -45,
                                      textAnchor: "end",
                                      height: 100,
                                    }),
                                    (0, n.jsx)(z.h, {
                                      label: {
                                        value: "Monthly Cost (€)",
                                        angle: -90,
                                        position: "insideLeft",
                                      },
                                    }),
                                    (0, n.jsx)(D.m, {
                                      formatter: (e) => "€".concat(e),
                                    }),
                                    (0, n.jsx)(E.s, {}),
                                    (0, n.jsx)(P.y, {
                                      dataKey: "accommodation",
                                      stackId: "a",
                                      fill: J.accommodation,
                                      name: "Accommodation",
                                    }),
                                    (0, n.jsx)(P.y, {
                                      dataKey: "food",
                                      stackId: "a",
                                      fill: J.food,
                                      name: "Food",
                                    }),
                                    (0, n.jsx)(P.y, {
                                      dataKey: "other",
                                      stackId: "a",
                                      fill: J.misc,
                                      name: "Other Costs",
                                    }),
                                  ],
                                }),
                              }),
                              (0, n.jsx)("div", {
                                className: "grid md:grid-cols-3 gap-4 mt-8",
                                children: u.map((e) => {
                                  var t;
                                  let i =
                                      (null ===
                                        (t = _.find(
                                          (t) => t.city === e.name,
                                        )) || void 0 === t
                                        ? void 0
                                        : t.total) || 0,
                                    a = l.totalMonthly - i;
                                  return (0, n.jsxs)(
                                    "div",
                                    {
                                      className:
                                        "p-4 bg-beige border-2 border-border rounded-xl",
                                      children: [
                                        (0, n.jsx)("h4", {
                                          className:
                                            "font-semibold text-secondary mb-2",
                                          children: e.name,
                                        }),
                                        (0, n.jsx)("p", {
                                          className:
                                            "text-sm text-muted-foreground mb-2",
                                          children: e.tier,
                                        }),
                                        (0, n.jsxs)("div", {
                                          className:
                                            "text-2xl font-bold text-secondary mb-1",
                                          children: [
                                            "€",
                                            i.toLocaleString(),
                                            "/mo",
                                          ],
                                        }),
                                        (0, n.jsxs)("div", {
                                          className:
                                            "text-sm text-secondary font-semibold",
                                          children: [
                                            "Save €",
                                            a.toLocaleString(),
                                            "/month",
                                          ],
                                        }),
                                      ],
                                    },
                                    e.id,
                                  );
                                }),
                              }),
                            ],
                          }),
                      }),
                    (0, n.jsxs)("section", {
                      className:
                        "bg-cream rounded-xl border-2 border-border p-8 mb-8",
                      children: [
                        (0, n.jsxs)("h3", {
                          className:
                            "text-lg font-semibold text-secondary mb-4 flex items-center gap-2",
                          children: [
                            (0, n.jsx)(b.A, {
                              className: "h-5 w-5 text-orange",
                              "aria-hidden": "true",
                            }),
                            "Part-Time Work Options",
                          ],
                        }),
                        (0, n.jsx)("p", {
                          className: "text-sm text-muted-foreground mb-4",
                          children:
                            "Ausbildung trainees can work up to 20 hours/week. Here's how much you could earn:",
                        }),
                        (0, n.jsx)("div", {
                          className: "grid md:grid-cols-3 gap-4",
                          children: [
                            { hours: 10, wage: 13, label: "10h/week @ €13/h" },
                            { hours: 15, wage: 14, label: "15h/week @ €14/h" },
                            { hours: 20, wage: 15, label: "20h/week @ €15/h" },
                          ].map((e) => {
                            let t = e.hours * e.wage * 4.33,
                              i = l.monthlySurplus + t;
                            return (0, n.jsxs)(
                              "div",
                              {
                                className:
                                  "p-4 bg-card border-2 border-border rounded-xl",
                                children: [
                                  (0, n.jsx)("div", {
                                    className:
                                      "text-sm text-muted-foreground mb-1",
                                    children: e.label,
                                  }),
                                  (0, n.jsxs)("div", {
                                    className:
                                      "text-2xl font-bold text-orange mb-1",
                                    children: [
                                      "+€",
                                      Math.round(t).toLocaleString(),
                                    ],
                                  }),
                                  (0, n.jsxs)("div", {
                                    className:
                                      "text-sm font-semibold text-muted-foreground",
                                    children: [
                                      "New balance: ",
                                      (0, n.jsxs)("span", {
                                        className: "text-secondary",
                                        children: [
                                          "€",
                                          Math.round(i).toLocaleString(),
                                          "/mo",
                                        ],
                                      }),
                                    ],
                                  }),
                                ],
                              },
                              e.label,
                            );
                          }),
                        }),
                      ],
                    }),
                  ],
                }),
              (0, n.jsx)(v.ToolFAQSection, { faqs: W, className: "mb-8" }),
              (0, n.jsx)(C.RelatedTools, {
                currentToolSlug: "living-cost-calculator",
                limit: 3,
              }),
              (0, n.jsxs)("section", {
                className:
                  "bg-beige rounded-xl border-2 border-border p-8 text-center",
                children: [
                  (0, n.jsx)("h3", {
                    className: "text-2xl font-semibold text-secondary mb-4",
                    children: "Need Help Planning Your Ausbildung Budget?",
                  }),
                  (0, n.jsx)("p", {
                    className: "text-muted-foreground mb-8 max-w-2xl mx-auto",
                    children:
                      "Create your free account to access personalized tools, find affordable cities that match your Ausbildung sector, and start planning your move to Germany.",
                  }),
                  (0, n.jsx)(A.$, {
                    asChild: !0,
                    size: "lg",
                    className: "bg-orange hover:bg-orange-hover rounded-full",
                    children: (0, n.jsx)("a", {
                      href: "/auth?signup",
                      children: "Plan Your Move",
                    }),
                  }),
                ],
              }),
            ],
          })
        );
      }
    },
    85214: (e, t, i) => {
      Promise.resolve().then(i.bind(i, 36011));
    },
  },
  (e) => {
    var t = (t) => e((e.s = t));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => t(85214)),
      (_N_E = e.O()));
  },
]);
