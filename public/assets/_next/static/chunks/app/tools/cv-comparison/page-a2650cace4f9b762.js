(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [40564],
  {
    26130: (e, s, a) => {
      Promise.resolve().then(a.bind(a, 97662));
    },
    97662: (e, s, a) => {
      "use strict";
      (a.r(s), a.d(s, { default: () => R }));
      var t = a(70207),
        r = a(87223),
        n = a(27239),
        i = a(28560),
        o = a(67926),
        l = a(95992),
        c = a(88117),
        d = a(46031),
        m = a(70005),
        x = a(39175),
        h = a(27774),
        u = a(93595),
        p = a(14207),
        g = a(10863),
        f = a(65915),
        y = a(18790);
      let b = {
          generalSpecs: {
            format: "DIN 5008",
            length: "2-3 pages maximum",
            pageSize: "A4 (210 x 297 mm)",
            margins: "2.5 cm all sides",
            font: "Arial, Calibri, or Times New Roman",
            fontSize: "11-12 pt body, 14-16 pt headings",
            lineSpacing: "1.0 to 1.15",
            design: "Clean, professional, minimal colors",
            photoRequired: !0,
            chronology: "Reverse (most recent first)",
          },
          sections: [
            {
              id: "photo",
              name: "Professional Photo",
              germanName: "Bewerbungsfoto",
              required: !0,
              order: 1,
              description: "Passport-style professional photo",
              format: "4.5 x 6 cm, top-right corner or header",
              tips: [
                "Professional attire (suit/blazer)",
                "Neutral background (white, light gray, blue)",
                "Eye contact with camera, slight smile",
                "Recent photo (< 6 months old)",
                "NO selfies, NO casual photos",
                "Digital quality: 300 dpi minimum",
              ],
            },
            {
              id: "personal",
              name: "Personal Information",
              germanName: "Pers\xf6nliche Daten",
              required: !0,
              order: 2,
              description: "Full contact and personal details",
              format: "Header section or left column",
              tips: [
                "MUST include: Full name, Address, Phone (mobile), Email, Date of birth, Nationality",
                "OPTIONAL: Marital status, Driving license",
                "NEVER include: Religion, Political affiliation, Parents' names, ID numbers",
                "Phone format: +49 (country code) or mobile format",
                "Email: Professional (firstname.lastname@provider.com)",
              ],
            },
            {
              id: "work",
              name: "Work Experience",
              germanName: "Berufserfahrung",
              required: !0,
              order: 3,
              description:
                "Professional experience in reverse chronological order",
              format: "MM/YYYY – MM/YYYY or Present",
              tips: [
                "Reverse chronological (most recent first)",
                "Format: Date range | Company Name | Job Title | Location",
                "List 3-5 bullet points per role (responsibilities + achievements)",
                "Quantify achievements where possible",
                "Use action verbs: managed, developed, implemented, led",
                "Include internships, traineeships, working student roles",
                "Gaps MUST be explained (Job search, Professional development, Parental leave)",
              ],
            },
            {
              id: "education",
              name: "Education",
              germanName: "Ausbildung / Studium",
              required: !0,
              order: 4,
              description:
                "Academic qualifications in reverse chronological order",
              format: "MM/YYYY – MM/YYYY",
              tips: [
                "Format: Date range | Degree/Qualification | Institution | Location",
                "Include GPA if above 2.5 (German scale)",
                "List major subjects or specializations",
                "Include thesis title for Bachelor's/Master's (if relevant)",
                "Certifications and professional courses can be separate section",
                "High school only if no university degree",
              ],
            },
            {
              id: "skills",
              name: "Skills",
              germanName: "Kenntnisse und F\xe4higkeiten",
              required: !0,
              order: 5,
              description: "Technical and soft skills",
              format: "Categorized list",
              tips: [
                "Categories: Technical Skills, Software, Languages, Soft Skills",
                "For languages: Use CEFR levels (A1-C2) or Native",
                'For software: List specific tools/versions (e.g., "Adobe Photoshop CC")',
                'Avoid vague terms: "Good communication skills" → "Experience presenting to C-level executives"',
                "Match skills to Ausbildung requirements",
              ],
            },
            {
              id: "languages",
              name: "Languages",
              germanName: "Sprachkenntnisse",
              required: !0,
              order: 6,
              description: "Language proficiency with CEFR levels",
              format: "Language: Level (Certificate)",
              tips: [
                'MUST use CEFR framework (A1, A2, B1, B2, C1, C2) or "Native"',
                'Include certificate names: "German: B1 (Goethe-Zertifikat B1)"',
                "Order: German → English → Other languages",
                "Specify: reading, writing, speaking levels if different",
                "Include year of last certification if available",
              ],
            },
            {
              id: "hobbies",
              name: "Hobbies & Interests",
              germanName: "Hobbys und Interessen",
              required: !1,
              order: 7,
              description: "Personal interests (optional but recommended)",
              format: "Brief list, 1-2 lines maximum",
              tips: [
                "Optional but valued in Germany (shows personality)",
                "Choose hobbies that show positive traits: Teamf\xe4higkeit, Belastbarkeit",
                "GOOD: Team sports, volunteering, creative pursuits, music",
                "AVOID: Controversial hobbies, political/religious activities",
                'Be specific: "Marathon running (completed 5 marathons)" vs "Fitness"',
                "Max 3-5 hobbies",
              ],
            },
            {
              id: "signature",
              name: "Date and Signature",
              germanName: "Ort, Datum und Unterschrift",
              required: !0,
              order: 8,
              description: "Closing with location, date, and signature",
              format: "Bottom of last page",
              tips: [
                'Format: "Munich, 15.01.2026"',
                'Digital signature image OR typed "(Handwritten signature follows in original)"',
                "Some modern CVs omit signature (acceptable for online applications)",
                "If printed: Blue ink handwritten signature",
              ],
            },
          ],
          prohibitedElements: [
            "Creative fonts (use Arial, Calibri only)",
            "Bright colors (use black, dark gray, minimal accent color)",
            "Graphics, icons, infographics (except small section dividers)",
            "Tables with heavy borders",
            "Religion, caste, political affiliation",
            "Father's/Mother's name or occupation",
            "National ID numbers or Passport numbers",
            "Physical characteristics (height, weight)",
            "Salary expectations (goes in cover letter, not CV)",
            "References (provide separately if requested)",
          ],
          commonMistakes: [
            'Using American-style "Resume" (1-page limit doesn\'t apply in Germany)',
            "Omitting birthdate (required in Germany, unlike USA)",
            "Creative design (German recruiters prefer traditional format)",
            "Unexplained employment gaps (Germans are suspicious of gaps)",
            "Listing irrelevant work experience (focus on relevant roles)",
            'Using "I" statements (use bullet points, not paragraphs)',
            "Including referees on CV (provide separately)",
            "Forgetting to include German language level",
            "Using wrong date format (DD.MM.YYYY not MM/DD/YYYY)",
          ],
        },
        j = {
          "United States": {
            photoRequirement: "Prohibited (discrimination concerns)",
            personalInfoExpectation: "Minimal (no DOB, age, marital status)",
            sectionOrder: "Summary → Experience → Education → Skills",
            dateFormat: "MM/YYYY",
            typicalLength: "1-2 pages maximum",
            designStyle: "Modern, ATS-friendly, clean",
            keyDifferences: [
              "No photo allowed vs Required in Germany",
              "No birthdate vs Required in Germany",
              "1-page resume vs 2-3 page Lebenslauf",
              "Summary section vs Direct experience",
              "Focus on achievements vs Detailed responsibilities",
            ],
          },
          "United Kingdom": {
            photoRequirement: "Not expected (unless specific industry)",
            personalInfoExpectation: "Basic contact info only",
            sectionOrder:
              "Personal Statement → Experience → Education → Skills",
            dateFormat: "MM/YYYY",
            typicalLength: "2 pages maximum",
            designStyle: "Professional, conservative",
            keyDifferences: [
              "Photo not expected vs Required in Germany",
              "Personal statement vs No summary",
              "References section common vs Provide separately",
              "No birthdate vs Required in Germany",
              "Focus on transferable skills vs Structured format",
            ],
          },
          Morocco: {
            photoRequirement: "Common and expected",
            personalInfoExpectation:
              "Detailed (DOB, marital status, nationality)",
            sectionOrder: "Personal → Education → Experience → Skills",
            dateFormat: "DD/MM/YYYY",
            typicalLength: "2-3 pages",
            designStyle: "Varied, can be colorful",
            keyDifferences: [
              "Personal details included vs Limited in Germany",
              "Education before experience vs Experience first",
              "Declaration statement vs None in Germany",
              "More personal details vs Limited in Germany",
              "Creative designs accepted vs Conservative only",
            ],
          },
          China: {
            photoRequirement: "Required and expected",
            personalInfoExpectation: "Very detailed (Hukou, ID number)",
            sectionOrder: "Personal → Education → Experience → Skills",
            dateFormat: "YYYY.MM",
            typicalLength: "1-2 pages",
            designStyle: "Formal, structured",
            keyDifferences: [
              "Hukou registration vs Not required in Germany",
              "National ID number vs Prohibited in Germany",
              "Political affiliation vs Not mentioned",
              "Height/weight common vs Prohibited in Germany",
              "Earlier start with education vs Experience first",
            ],
          },
          Brazil: {
            photoRequirement: "Optional but common",
            personalInfoExpectation: "Detailed (CPF, marital status)",
            sectionOrder: "Personal → Objective → Experience → Education",
            dateFormat: "MM/AAAA",
            typicalLength: "1-2 pages",
            designStyle: "Clean, can include color",
            keyDifferences: [
              "CPF number included vs Not in Germany",
              "Career objective section vs None",
              "More casual tone vs Formal",
              "References on CV vs Separate",
              "Portfolio links prominent vs Subtle",
            ],
          },
          Nigeria: {
            photoRequirement: "Expected",
            personalInfoExpectation:
              "Very detailed (religion, state of origin)",
            sectionOrder: "Personal → Education → Experience → Referees",
            dateFormat: "DD/MM/YYYY",
            typicalLength: "2-4 pages",
            designStyle: "Formal, detailed",
            keyDifferences: [
              "Religion included vs Prohibited in Germany",
              "State of origin vs Not mentioned",
              "Referees on CV vs Provide separately",
              "Longer format accepted vs 2-3 pages max",
              "Next of kin information vs Not included",
            ],
          },
          Pakistan: {
            photoRequirement: "Expected",
            personalInfoExpectation: "Detailed (CNIC, father's name)",
            sectionOrder: "Personal → Education → Experience → Skills",
            dateFormat: "DD/MM/YYYY",
            typicalLength: "2-3 pages",
            designStyle: "Formal, traditional",
            keyDifferences: [
              "CNIC number vs Not in Germany",
              "Father's name vs Prohibited",
              "Religion sometimes vs Never in Germany",
              "More decorative borders vs Clean design",
              "Domicile information vs Not relevant",
            ],
          },
          Turkey: {
            photoRequirement: "Common",
            personalInfoExpectation: "Detailed (TC ID, military status)",
            sectionOrder: "Personal → Education → Experience → Skills",
            dateFormat: "DD.MM.YYYY",
            typicalLength: "1-2 pages",
            designStyle: "Professional, clean",
            keyDifferences: [
              "TC ID number vs Not in Germany",
              "Military service status vs Not mentioned",
              "Driving license details vs Brief mention",
              "More personal details vs Limited",
              "References included vs Separate",
            ],
          },
          Egypt: {
            photoRequirement: "Expected",
            personalInfoExpectation: "Detailed (National ID, religion)",
            sectionOrder: "Personal → Education → Experience → Skills",
            dateFormat: "DD/MM/YYYY",
            typicalLength: "2-3 pages",
            designStyle: "Formal, structured",
            keyDifferences: [
              "National ID vs Not in Germany",
              "Religion included vs Prohibited",
              "Military status vs Not mentioned",
              "More formal language vs Direct",
              "Family status detailed vs Brief",
            ],
          },
          Mexico: {
            photoRequirement: "Common",
            personalInfoExpectation: "Moderate (RFC, CURP sometimes)",
            sectionOrder: "Personal → Objective → Experience → Education",
            dateFormat: "DD/MM/AAAA",
            typicalLength: "1-2 pages",
            designStyle: "Clean, modern",
            keyDifferences: [
              "RFC/CURP sometimes vs Not in Germany",
              "Career objective vs None",
              "More casual approach vs Formal",
              "Salary expectations sometimes vs Never",
              "Colorful designs accepted vs Conservative",
            ],
          },
          Vietnam: {
            photoRequirement: "Required",
            personalInfoExpectation: "Detailed (ID card, place of birth)",
            sectionOrder: "Personal → Education → Experience → Skills",
            dateFormat: "DD/MM/YYYY",
            typicalLength: "2-3 pages",
            designStyle: "Formal, traditional",
            keyDifferences: [
              "ID card number vs Not in Germany",
              "Place of birth detailed vs Just nationality",
              "Permanent address vs Current address",
              "More personal background vs Professional focus",
              "References on CV vs Separate",
            ],
          },
          Philippines: {
            photoRequirement: "Expected",
            personalInfoExpectation: "Detailed (TIN, SSS number)",
            sectionOrder: "Personal → Education → Experience → Skills",
            dateFormat: "MM/DD/YYYY",
            typicalLength: "2-3 pages",
            designStyle: "Varied, can be creative",
            keyDifferences: [
              "Government IDs vs Not in Germany",
              "Character references vs Professional only",
              "More casual tone vs Formal",
              "Extensive personal details vs Limited",
              "Creative designs common vs Conservative",
            ],
          },
          default: {
            photoRequirement: "Varies by country",
            personalInfoExpectation: "Varies by cultural norms",
            sectionOrder: "Typically: Personal → Education/Experience → Skills",
            dateFormat: "Country-specific",
            typicalLength: "1-3 pages",
            designStyle: "Varies by region",
            keyDifferences: [
              "Photo requirements differ significantly",
              "Personal information varies by culture",
              "Section order may differ",
              "Date formats vary",
              "Design expectations differ",
            ],
          },
        };
      var v = a(82110);
      function N(e) {
        let { selectedCountry: s, showAIGuidance: a = !1 } = e,
          r = j[s] || j.default;
        return (0, t.jsxs)("div", {
          className: "space-y-8",
          children: [
            (0, t.jsxs)("div", {
              className: "grid md:grid-cols-2 gap-8",
              children: [
                (0, t.jsxs)("div", {
                  className: "space-y-6",
                  children: [
                    (0, t.jsxs)("div", {
                      className: "flex items-center gap-3",
                      children: [
                        (0, t.jsx)("div", {
                          className:
                            "w-12 h-12 rounded-xl bg-beige flex items-center justify-center",
                          children: (0, t.jsx)(m.A, {
                            className: "w-6 h-6 text-orange",
                          }),
                        }),
                        (0, t.jsxs)("div", {
                          children: [
                            (0, t.jsx)("h3", {
                              className: "text-xl font-semibold text-secondary",
                              children: "German CV Format",
                            }),
                            (0, t.jsx)("p", {
                              className: "text-sm text-muted-foreground",
                              children: "DIN 5008 Standard",
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, t.jsxs)("div", {
                      className: "space-y-4",
                      children: [
                        (0, t.jsxs)("div", {
                          className:
                            "p-6 rounded-xl bg-cream border border-border",
                          children: [
                            (0, t.jsxs)("h4", {
                              className:
                                "font-semibold text-secondary mb-4 flex items-center gap-2",
                              children: [
                                (0, t.jsx)(f.A, {
                                  className: "w-5 h-5 text-orange",
                                }),
                                "General Specifications",
                              ],
                            }),
                            (0, t.jsxs)("div", {
                              className: "space-y-3 text-sm",
                              children: [
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Format:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: b.generalSpecs.format,
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Length:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: b.generalSpecs.length,
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Page Size:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: b.generalSpecs.pageSize,
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Font:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: b.generalSpecs.font,
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Photo:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-orange",
                                      children: b.generalSpecs.photoRequired
                                        ? "Required"
                                        : "Not Required",
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, t.jsxs)("div", {
                          className:
                            "p-6 rounded-xl bg-cream border border-border",
                          children: [
                            (0, t.jsx)("h4", {
                              className: "font-semibold text-secondary mb-4",
                              children: "Required Sections",
                            }),
                            (0, t.jsx)("div", {
                              className: "space-y-4",
                              children: b.sections.map((e) =>
                                (0, t.jsxs)(
                                  "div",
                                  {
                                    className: (0, v.cn)(
                                      "flex items-start gap-3 p-4 rounded-xl",
                                      e.required ? "bg-beige" : "bg-cream",
                                    ),
                                    children: [
                                      (0, t.jsx)("div", {
                                        className: "mt-0.5",
                                        children: e.required
                                          ? (0, t.jsx)(m.A, {
                                              className: "w-5 h-5 text-orange",
                                            })
                                          : (0, t.jsx)(l.A, {
                                              className:
                                                "w-5 h-5 text-muted-foreground",
                                            }),
                                      }),
                                      (0, t.jsxs)("div", {
                                        className: "flex-1 min-w-0",
                                        children: [
                                          (0, t.jsxs)("p", {
                                            className:
                                              "font-medium text-secondary text-sm",
                                            children: [e.order, ". ", e.name],
                                          }),
                                          (0, t.jsx)("p", {
                                            className:
                                              "text-xs text-muted-foreground mt-1",
                                            children: e.germanName,
                                          }),
                                          (0, t.jsx)("p", {
                                            className:
                                              "text-xs text-muted-foreground mt-1",
                                            children: e.description,
                                          }),
                                        ],
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
                (0, t.jsxs)("div", {
                  className: "space-y-6",
                  children: [
                    (0, t.jsxs)("div", {
                      className: "flex items-center gap-3",
                      children: [
                        (0, t.jsx)("div", {
                          className:
                            "w-12 h-12 rounded-xl bg-beige flex items-center justify-center",
                          children: (0, t.jsx)(f.A, {
                            className: "w-6 h-6 text-orange",
                          }),
                        }),
                        (0, t.jsxs)("div", {
                          children: [
                            (0, t.jsxs)("h3", {
                              className: "text-xl font-semibold text-secondary",
                              children: [s, " CV Format"],
                            }),
                            (0, t.jsx)("p", {
                              className: "text-sm text-muted-foreground",
                              children: "Typical Standards",
                            }),
                          ],
                        }),
                      ],
                    }),
                    (0, t.jsxs)("div", {
                      className: "space-y-4",
                      children: [
                        (0, t.jsxs)("div", {
                          className:
                            "p-6 rounded-xl bg-cream border border-border",
                          children: [
                            (0, t.jsxs)("h4", {
                              className:
                                "font-semibold text-secondary mb-4 flex items-center gap-2",
                              children: [
                                (0, t.jsx)(f.A, {
                                  className: "w-5 h-5 text-orange",
                                }),
                                "General Specifications",
                              ],
                            }),
                            (0, t.jsxs)("div", {
                              className: "space-y-3 text-sm",
                              children: [
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Photo:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: r.photoRequirement,
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Length:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: r.typicalLength,
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Date Format:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: r.dateFormat,
                                    }),
                                  ],
                                }),
                                (0, t.jsxs)("div", {
                                  className: "flex justify-between",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "text-muted-foreground",
                                      children: "Design:",
                                    }),
                                    (0, t.jsx)("span", {
                                      className: "font-medium text-secondary",
                                      children: r.designStyle,
                                    }),
                                  ],
                                }),
                              ],
                            }),
                          ],
                        }),
                        (0, t.jsxs)("div", {
                          className:
                            "p-6 rounded-xl bg-beige border border-border",
                          children: [
                            (0, t.jsx)("h4", {
                              className: "font-semibold text-secondary mb-4",
                              children: "Key Differences",
                            }),
                            (0, t.jsx)("div", {
                              className: "space-y-4",
                              children: r.keyDifferences.map((e, s) =>
                                (0, t.jsxs)(
                                  "div",
                                  {
                                    className: "flex items-start gap-3",
                                    children: [
                                      (0, t.jsx)(l.A, {
                                        className:
                                          "w-5 h-5 text-orange flex-shrink-0 mt-0.5",
                                      }),
                                      (0, t.jsx)("p", {
                                        className: "text-sm text-secondary",
                                        children: e,
                                      }),
                                    ],
                                  },
                                  s,
                                ),
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
            (0, t.jsxs)("div", {
              className:
                "rounded-xl bg-cream border border-border overflow-hidden",
              children: [
                (0, t.jsxs)("div", {
                  className: "p-8 border-b border-border",
                  children: [
                    (0, t.jsx)("h3", {
                      className: "text-xl font-semibold text-secondary",
                      children: "Detailed Side-by-Side Comparison",
                    }),
                    (0, t.jsx)("p", {
                      className: "text-sm text-muted-foreground mt-1",
                      children:
                        "Understanding the critical differences between formats",
                    }),
                  ],
                }),
                (0, t.jsx)("div", {
                  className: "overflow-x-auto",
                  children: (0, t.jsxs)("table", {
                    className: "w-full",
                    children: [
                      (0, t.jsx)("thead", {
                        className: "bg-beige",
                        children: (0, t.jsxs)("tr", {
                          children: [
                            (0, t.jsx)("th", {
                              className:
                                "px-6 py-4 text-left text-sm font-semibold text-secondary",
                              children: "Category",
                            }),
                            (0, t.jsx)("th", {
                              className:
                                "px-6 py-4 text-left text-sm font-semibold text-orange",
                              children: "German Standard (DIN 5008)",
                            }),
                            (0, t.jsxs)("th", {
                              className:
                                "px-6 py-4 text-left text-sm font-semibold text-orange",
                              children: [s, " Standard"],
                            }),
                          ],
                        }),
                      }),
                      (0, t.jsxs)("tbody", {
                        className: "divide-y divide-border",
                        children: [
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Professional Photo",
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: (0, t.jsxs)("div", {
                                  className: "flex items-start gap-2",
                                  children: [
                                    (0, t.jsx)(m.A, {
                                      className:
                                        "w-5 h-5 text-orange flex-shrink-0 mt-0.5",
                                    }),
                                    (0, t.jsxs)("div", {
                                      children: [
                                        (0, t.jsx)("p", {
                                          className: "font-medium",
                                          children: "Required",
                                        }),
                                        (0, t.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground mt-1",
                                          children:
                                            "4.5 x 6 cm, professional attire, neutral background",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: r.photoRequirement,
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Personal Information",
                              }),
                              (0, t.jsxs)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: [
                                  (0, t.jsx)("p", {
                                    className: "font-medium mb-2",
                                    children: "Required:",
                                  }),
                                  (0, t.jsxs)("ul", {
                                    className:
                                      "text-xs space-y-1 text-muted-foreground",
                                    children: [
                                      (0, t.jsx)("li", {
                                        children:
                                          "• Full name, address, phone, email",
                                      }),
                                      (0, t.jsx)("li", {
                                        children:
                                          "• Date of birth (DD.MM.YYYY)",
                                      }),
                                      (0, t.jsx)("li", {
                                        children: "• Nationality",
                                      }),
                                      (0, t.jsx)("li", {
                                        children:
                                          "• Optional: Marital status, driving license",
                                      }),
                                    ],
                                  }),
                                  (0, t.jsx)("p", {
                                    className:
                                      "font-medium mt-3 mb-2 text-orange",
                                    children: "Prohibited:",
                                  }),
                                  (0, t.jsx)("ul", {
                                    className: "text-xs space-y-1 text-orange",
                                    children: (0, t.jsx)("li", {
                                      children:
                                        "• Religion, ID numbers, parents' names",
                                    }),
                                  }),
                                ],
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: r.personalInfoExpectation,
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Section Order",
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: (0, t.jsxs)("ol", {
                                  className: "text-xs space-y-1",
                                  children: [
                                    (0, t.jsx)("li", {
                                      children: "1. Personal Info & Photo",
                                    }),
                                    (0, t.jsx)("li", {
                                      children:
                                        "2. Work Experience (reverse chronological)",
                                    }),
                                    (0, t.jsx)("li", {
                                      children: "3. Education",
                                    }),
                                    (0, t.jsx)("li", {
                                      children: "4. Skills & Certifications",
                                    }),
                                    (0, t.jsx)("li", {
                                      children: "5. Languages (CEFR levels)",
                                    }),
                                    (0, t.jsx)("li", {
                                      children:
                                        "6. Hobbies (optional but valued)",
                                    }),
                                    (0, t.jsx)("li", {
                                      children: "7. Date & Signature",
                                    }),
                                  ],
                                }),
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: r.sectionOrder,
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Date Format",
                              }),
                              (0, t.jsxs)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: [
                                  (0, t.jsx)("p", {
                                    className: "font-medium",
                                    children: "DD.MM.YYYY or MM/YYYY",
                                  }),
                                  (0, t.jsx)("p", {
                                    className:
                                      "text-xs text-muted-foreground mt-1",
                                    children: "Example: 15.01.2026 or 01/2026",
                                  }),
                                  (0, t.jsx)("p", {
                                    className: "text-xs text-muted-foreground",
                                    children: "For ranges: 03/2020 – 08/2023",
                                  }),
                                ],
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: r.dateFormat,
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Document Length",
                              }),
                              (0, t.jsxs)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: [
                                  (0, t.jsx)("p", {
                                    className: "font-medium",
                                    children: "2-3 pages maximum",
                                  }),
                                  (0, t.jsx)("p", {
                                    className:
                                      "text-xs text-muted-foreground mt-1",
                                    children:
                                      "Quality over quantity - only relevant information",
                                  }),
                                ],
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: r.typicalLength,
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Design & Style",
                              }),
                              (0, t.jsxs)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: [
                                  (0, t.jsx)("p", {
                                    className: "font-medium mb-2",
                                    children: "Conservative & Professional:",
                                  }),
                                  (0, t.jsxs)("ul", {
                                    className:
                                      "text-xs space-y-1 text-muted-foreground",
                                    children: [
                                      (0, t.jsx)("li", {
                                        children:
                                          "• Arial, Calibri, Times New Roman (11-12pt)",
                                      }),
                                      (0, t.jsx)("li", {
                                        children:
                                          "• Black text, minimal accent color",
                                      }),
                                      (0, t.jsx)("li", {
                                        children:
                                          "• Clean layout, no graphics/infographics",
                                      }),
                                      (0, t.jsx)("li", {
                                        children: "• A4 format, 2.5cm margins",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: r.designStyle,
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Employment Gaps",
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: (0, t.jsxs)("div", {
                                  className: "flex items-start gap-2",
                                  children: [
                                    (0, t.jsx)(l.A, {
                                      className:
                                        "w-5 h-5 text-orange flex-shrink-0 mt-0.5",
                                    }),
                                    (0, t.jsxs)("div", {
                                      children: [
                                        (0, t.jsx)("p", {
                                          className: "font-medium",
                                          children: "MUST be explained",
                                        }),
                                        (0, t.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground mt-1",
                                          children:
                                            'Germans are suspicious of unexplained gaps. Include: "Job Search", "Language Studies", "Parental Leave", etc.',
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: "Varies by country culture",
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Language Requirements",
                              }),
                              (0, t.jsxs)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: [
                                  (0, t.jsx)("p", {
                                    className: "font-medium mb-2",
                                    children: "CEFR Framework Required:",
                                  }),
                                  (0, t.jsxs)("ul", {
                                    className:
                                      "text-xs space-y-1 text-muted-foreground",
                                    children: [
                                      (0, t.jsx)("li", {
                                        children:
                                          "• German: [Level] (Certificate name)",
                                      }),
                                      (0, t.jsx)("li", {
                                        children: "• English: [Level]",
                                      }),
                                      (0, t.jsx)("li", {
                                        children: '• Use A1-C2 or "Native"',
                                      }),
                                      (0, t.jsx)("li", {
                                        children:
                                          "• Include certification names",
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: "Varies - often less standardized",
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "References",
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: (0, t.jsxs)("div", {
                                  className: "flex items-start gap-2",
                                  children: [
                                    (0, t.jsx)(y.A, {
                                      className:
                                        "w-5 h-5 text-orange flex-shrink-0 mt-0.5",
                                    }),
                                    (0, t.jsxs)("div", {
                                      children: [
                                        (0, t.jsx)("p", {
                                          className: "font-medium",
                                          children: "NOT on CV",
                                        }),
                                        (0, t.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground mt-1",
                                          children:
                                            'Provide separately when requested. Don\'t write "References available upon request"',
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: "Often included or noted",
                              }),
                            ],
                          }),
                          (0, t.jsxs)("tr", {
                            className: "hover:bg-beige/50 transition-colors",
                            children: [
                              (0, t.jsx)("td", {
                                className:
                                  "px-6 py-4 text-sm font-medium text-secondary",
                                children: "Hobbies & Interests",
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children: (0, t.jsxs)("div", {
                                  className: "flex items-start gap-2",
                                  children: [
                                    (0, t.jsx)(m.A, {
                                      className:
                                        "w-5 h-5 text-orange flex-shrink-0 mt-0.5",
                                    }),
                                    (0, t.jsxs)("div", {
                                      children: [
                                        (0, t.jsx)("p", {
                                          className: "font-medium",
                                          children: "Optional but valued",
                                        }),
                                        (0, t.jsx)("p", {
                                          className:
                                            "text-xs text-muted-foreground mt-1",
                                          children:
                                            "Shows personality and cultural fit. Choose 3-5 hobbies showing positive traits (teamwork, resilience, creativity)",
                                        }),
                                      ],
                                    }),
                                  ],
                                }),
                              }),
                              (0, t.jsx)("td", {
                                className: "px-6 py-4 text-sm text-secondary",
                                children:
                                  "Varies - often omitted in professional CVs",
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
            (0, t.jsx)("div", {
              className: "p-8 rounded-xl bg-cream border border-border",
              children: (0, t.jsxs)("div", {
                className: "flex items-start gap-4",
                children: [
                  (0, t.jsx)(y.A, {
                    className: "w-6 h-6 text-orange flex-shrink-0 mt-1",
                  }),
                  (0, t.jsxs)("div", {
                    className: "flex-1",
                    children: [
                      (0, t.jsx)("h4", {
                        className: "font-semibold text-secondary mb-4",
                        children: "Prohibited Elements in German CVs",
                      }),
                      (0, t.jsx)("div", {
                        className: "grid md:grid-cols-2 gap-4",
                        children: b.prohibitedElements.map((e, s) =>
                          (0, t.jsxs)(
                            "div",
                            {
                              className: "flex items-start gap-2",
                              children: [
                                (0, t.jsx)("div", {
                                  className:
                                    "w-2 h-2 rounded-full bg-orange flex-shrink-0 mt-2",
                                }),
                                (0, t.jsx)("p", {
                                  className: "text-sm text-secondary",
                                  children: e,
                                }),
                              ],
                            },
                            s,
                          ),
                        ),
                      }),
                    ],
                  }),
                ],
              }),
            }),
            (0, t.jsx)("div", {
              className: "p-8 rounded-xl bg-beige border border-border",
              children: (0, t.jsxs)("div", {
                className: "flex items-start gap-4",
                children: [
                  (0, t.jsx)(l.A, {
                    className: "w-6 h-6 text-orange flex-shrink-0 mt-1",
                  }),
                  (0, t.jsxs)("div", {
                    className: "flex-1",
                    children: [
                      (0, t.jsx)("h4", {
                        className: "font-semibold text-secondary mb-4",
                        children: "Common Mistakes to Avoid",
                      }),
                      (0, t.jsx)("div", {
                        className: "grid md:grid-cols-2 gap-4",
                        children: b.commonMistakes.map((e, s) =>
                          (0, t.jsxs)(
                            "div",
                            {
                              className: "flex items-start gap-2",
                              children: [
                                (0, t.jsx)("div", {
                                  className:
                                    "w-2 h-2 rounded-full bg-orange flex-shrink-0 mt-2",
                                }),
                                (0, t.jsx)("p", {
                                  className: "text-sm text-secondary",
                                  children: e,
                                }),
                              ],
                            },
                            s,
                          ),
                        ),
                      }),
                    ],
                  }),
                ],
              }),
            }),
          ],
        });
      }
      let C = [
        {
          question: "Is a photo required on a German CV?",
          answer:
            "Yes, a professional photo (Bewerbungsfoto) is expected on German CVs, though not legally required. It should be a high-quality, passport-style photo (4.5 x 6 cm) placed in the top-right corner or header. The photo should show you in professional attire with a neutral background. This differs significantly from countries like the USA where photos are prohibited due to anti-discrimination laws. German employers expect to see your photo as part of making a personal connection before the interview.",
        },
        {
          question:
            "What are the length requirements for a German CV (Lebenslauf)?",
          answer:
            "German CVs should be 2-3 pages maximum, following the DIN 5008 standard. This is different from American resumes (typically 1 page) or some Asian countries where 4+ pages are acceptable. Quality over quantity is key - include only relevant information presented clearly. Fresh graduates can use 2 pages, while experienced professionals may use up to 3 pages. Never exceed 3 pages as German recruiters value conciseness and efficiency.",
        },
        {
          question:
            "What personal information must be included on a German CV?",
          answer:
            "German CVs require: Full name, complete address, phone number (mobile preferred with +49 country code), professional email, date of birth, and nationality. Optional but common: marital status and driving license. NEVER include: religion, political affiliation, parents' names, national ID numbers, passport numbers, or physical characteristics (height/weight). While birthdate is prohibited in USA/UK CVs, it is expected in Germany. Always include your nationality, especially as an international applicant.",
        },
        {
          question: "How should dates be formatted in a German CV?",
          answer:
            'Use the German date format: DD.MM.YYYY (e.g., 15.01.2026) or MM/YYYY for date ranges (e.g., 03/2020 – 08/2023). Never use the American format MM/DD/YYYY. For ongoing positions, use "MM/YYYY – Present" or "MM/YYYY – heute" (German for present). All work experience and education should be listed in reverse chronological order (most recent first). Consistency in date formatting throughout your CV is critical - German recruiters notice formatting inconsistencies immediately.',
        },
        {
          question: "What design style is acceptable for a German CV?",
          answer:
            "German CVs follow a conservative, professional design following DIN 5008 standards. Use standard fonts (Arial, Calibri, Times New Roman) in 11-12pt for body text and 14-16pt for headings. Stick to black text with minimal accent colors (one accent color maximum). Avoid creative designs, graphics, infographics, colorful backgrounds, or decorative elements. While some modern templates exist, traditional formats are safest for Ausbildung applications. German recruiters prioritize clear structure and readability over creative design. Save creativity for portfolios, not CVs.",
        },
        {
          question: "Are hobbies and interests necessary on a German CV?",
          answer:
            'While optional, a hobbies section (Hobbys und Interessen) is valued in German CVs and recommended. It shows personality and cultural fit beyond professional qualifications. Choose 3-5 hobbies that demonstrate positive traits: team sports show Teamf\xe4higkeit (teamwork), volunteering shows social responsibility, creative pursuits show innovation. Be specific: "Marathon running (completed 5 marathons)" is better than "Fitness". Avoid controversial activities, political/religious affiliations, or passive hobbies like "watching TV". Germans appreciate well-rounded candidates who can integrate into workplace culture.',
        },
        {
          question: "How should I handle employment gaps in my German CV?",
          answer:
            'Employment gaps MUST be explained in German CVs - unexplained gaps raise serious red flags. Include gap periods with honest explanations: "Job Search & Professional Development (03/2023 – 08/2023)", "Parental Leave", "Language Studies - German B2 Course", "Health Recovery", or "Family Caregiving". Germans value honesty (Ehrlichkeit) and transparency. If you used gap time productively (learning German, freelancing, volunteering, courses), highlight these activities. Brief gaps (1-3 months) between jobs are acceptable without explanation. Longer gaps need clear, honest justification.',
        },
        {
          question:
            "What is the main difference between a German Lebenslauf and American Resume?",
          answer:
            "Key differences: 1) Length: German Lebenslauf is 2-3 pages vs American Resume 1-2 pages. 2) Photo: Required in Germany, prohibited in USA. 3) Personal info: Germans include birthdate and nationality; Americans exclude both. 4) Structure: German CVs are detailed and chronological; American resumes are achievement-focused with summary sections. 5) Design: German CVs follow conservative DIN 5008 format; American resumes can be more creative/ATS-optimized. 6) Gaps: Must be explained in Germany; less scrutinized in USA. 7) References: Provided separately in Germany; often included in USA. The German Lebenslauf emphasizes thorough documentation while American resumes prioritize concise achievements.",
        },
        {
          question: "Should I include references on my German CV?",
          answer:
            'No, do not list references directly on your German CV. The phrase "References available upon request" is also unnecessary and outdated. Instead, prepare a separate reference sheet with 2-3 professional references (name, title, company, relationship to you, contact information) to provide when specifically requested. Some German application processes ask for references later in the hiring process. Focus your CV space on your qualifications, experience, and skills rather than references. If an Ausbildung posting specifically requests references, provide them in a separate document, not on the CV itself.',
        },
        {
          question:
            "What are the most common mistakes international applicants make on German CVs?",
          answer:
            'Top 10 mistakes: 1) Omitting professional photo or using casual selfies. 2) Not including birthdate (required in Germany). 3) Using creative/colorful designs instead of conservative DIN 5008 format. 4) Leaving employment gaps unexplained. 5) Using wrong date format (MM/DD/YYYY instead of DD.MM.YYYY). 6) Including prohibited information (religion, parents\' names, ID numbers). 7) Not specifying German language level with CEFR certification. 8) Writing a 1-page "resume" instead of proper 2-3 page Lebenslauf. 9) Including salary expectations on CV (belongs in cover letter only). 10) Forgetting signature and date at the bottom. Avoid these mistakes to significantly improve your chances with German employers.',
        },
      ];
      var w = a(39441),
        S = a(87277),
        k = a(93501),
        D = a(40167),
        G = a(41082),
        Y = a(51105),
        A = a(58233);
      function E(e) {
        let { toolName: s, url: a, className: n } = e,
          [i, o] = (0, r.useState)(!1),
          l = async () => {
            let e = "".concat(window.location.origin).concat(a);
            if (navigator.share)
              try {
                await navigator.share({
                  title: s,
                  text: "Check out this tool: ".concat(s),
                  url: e,
                });
                return;
              } catch (e) {}
            try {
              (await navigator.clipboard.writeText(e),
                o(!0),
                setTimeout(() => o(!1), 2e3));
            } catch (e) {
              console.error("Failed to copy:", e);
            }
          };
        return (0, t.jsx)(w.$, {
          onClick: l,
          variant: "outline",
          className: n,
          children: i
            ? (0, t.jsxs)(t.Fragment, {
                children: [
                  (0, t.jsx)(Y.A, { className: "w-4 h-4 mr-2" }),
                  "Copied!",
                ],
              })
            : (0, t.jsxs)(t.Fragment, {
                children: [
                  (0, t.jsx)(A.A, { className: "w-4 h-4 mr-2" }),
                  "Share",
                ],
              }),
        });
      }
      var P = a(10542),
        M = a.n(P);
      let F = [
          "United States",
          "United Kingdom",
          "Morocco",
          "China",
          "Brazil",
          "Egypt",
          "Spain",
          "Turkey",
          "Algeria",
          "Mexico",
          "Vietnam",
          "Philippines",
          "Italy",
          "Indonesia",
          "Russia",
          "South Africa",
          "Germany",
          "Ghana",
          "France",
          "Tunisia",
          "Jordan",
          "Lebanon",
          "Saudi Arabia",
          "Senegal",
          "Iran",
          "Afghanistan",
          "Portugal",
          "Romania",
          "Thailand",
          "Malaysia",
          "Singapore",
          "South Korea",
          "Japan",
          "Australia",
          "Canada",
          "France",
          "Spain",
          "Italy",
          "Poland",
          "Ukraine",
          "Romania",
          "Greece",
          "Portugal",
          "Netherlands",
          "Belgium",
          "Sweden",
          "Norway",
          "Denmark",
          "Finland",
          "Austria",
          "Switzerland",
        ],
        I = [
          "Healthcare & Nursing",
          "IT & Technology",
          "Engineering & Manufacturing",
          "Hospitality & Culinary Arts",
          "Business & Administration",
          "Crafts & Trades",
          "Retail & Sales",
          "Logistics & Supply Chain",
          "Media & Creative",
        ],
        q = [
          "High School",
          "Bachelor's Degree",
          "Master's Degree",
          "PhD / Doctorate",
          "Diploma / Certificate",
        ];
      function R() {
        let [e, s] = (0, r.useState)({
            country: "",
            sector: "",
            educationLevel: "",
            yearsExperience: 0,
            hasGaps: !1,
            unconventionalBackground: !1,
            currentLength: "",
          }),
          [a, f] = (0, r.useState)(!1),
          [y, j] = (0, r.useState)(null),
          [v, Y] = (0, r.useState)(!1),
          A = (e, a) => {
            s((s) => ({ ...s, [e]: a }));
          },
          P = async () => {
            Y(!0);
            try {
              let s = await fetch("/api/tools/generate-cv-guidance", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(e),
              });
              if (!s.ok) throw Error("Failed to generate guidance");
              let a = await s.json();
              j(a.guidance);
            } catch (e) {
              (console.error("Error getting guidance:", e),
                alert("Failed to generate expert guidance. Please try again."));
            } finally {
              Y(!1);
            }
          };
        return (0, t.jsx)(h.d, {
          title: "German CV vs Home Country CV Comparison",
          description:
            "Compare German CV format (Lebenslauf) with your home country's resume standards. Learn DIN 5008 requirements, photo standards, and cultural expectations for Ausbildung applications.",
          icon: n.A,
          category: "Career Tools",
          toolSlug: "cv-comparison",
          children: (0, t.jsxs)("div", {
            className: "space-y-12",
            children: [
              (0, t.jsxs)(u.tZ, {
                title: "Your Background",
                icon: i.A,
                children: [
                  (0, t.jsxs)("div", {
                    className: "grid md:grid-cols-2 gap-6",
                    children: [
                      (0, t.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, t.jsxs)(S.J, {
                            htmlFor: "country",
                            children: [
                              "Home Country ",
                              (0, t.jsx)("span", {
                                className: "text-orange",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, t.jsxs)(k.l6, {
                            value: e.country,
                            onValueChange: (e) => A("country", e),
                            children: [
                              (0, t.jsx)(k.bq, {
                                id: "country",
                                children: (0, t.jsx)(k.yv, {
                                  placeholder: "Select your country...",
                                }),
                              }),
                              (0, t.jsx)(k.gC, {
                                children: F.map((e) =>
                                  (0, t.jsx)(
                                    k.eb,
                                    { value: e, children: e },
                                    e,
                                  ),
                                ),
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, t.jsxs)(S.J, {
                            htmlFor: "sector",
                            children: [
                              "Target Ausbildung Sector ",
                              (0, t.jsx)("span", {
                                className: "text-orange",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, t.jsxs)(k.l6, {
                            value: e.sector,
                            onValueChange: (e) => A("sector", e),
                            children: [
                              (0, t.jsx)(k.bq, {
                                id: "sector",
                                children: (0, t.jsx)(k.yv, {
                                  placeholder: "Select sector...",
                                }),
                              }),
                              (0, t.jsx)(k.gC, {
                                children: I.map((e) =>
                                  (0, t.jsx)(
                                    k.eb,
                                    { value: e, children: e },
                                    e,
                                  ),
                                ),
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, t.jsxs)(S.J, {
                            htmlFor: "educationLevel",
                            children: [
                              "Education Level ",
                              (0, t.jsx)("span", {
                                className: "text-orange",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, t.jsxs)(k.l6, {
                            value: e.educationLevel,
                            onValueChange: (e) => A("educationLevel", e),
                            children: [
                              (0, t.jsx)(k.bq, {
                                id: "educationLevel",
                                children: (0, t.jsx)(k.yv, {
                                  placeholder: "Select education level...",
                                }),
                              }),
                              (0, t.jsx)(k.gC, {
                                children: q.map((e) =>
                                  (0, t.jsx)(
                                    k.eb,
                                    { value: e, children: e },
                                    e,
                                  ),
                                ),
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, t.jsx)(S.J, {
                            htmlFor: "yearsExperience",
                            children: "Years of Work Experience",
                          }),
                          (0, t.jsx)(D.p, {
                            id: "yearsExperience",
                            type: "number",
                            min: "0",
                            max: "30",
                            value: e.yearsExperience,
                            onChange: (e) =>
                              A(
                                "yearsExperience",
                                parseInt(e.target.value) || 0,
                              ),
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className: "space-y-2",
                        children: [
                          (0, t.jsxs)(S.J, {
                            htmlFor: "currentLength",
                            children: [
                              "Current CV Length ",
                              (0, t.jsx)("span", {
                                className: "text-orange",
                                children: "*",
                              }),
                            ],
                          }),
                          (0, t.jsxs)(k.l6, {
                            value: e.currentLength,
                            onValueChange: (e) => A("currentLength", e),
                            children: [
                              (0, t.jsx)(k.bq, {
                                id: "currentLength",
                                children: (0, t.jsx)(k.yv, {
                                  placeholder: "Select length...",
                                }),
                              }),
                              (0, t.jsxs)(k.gC, {
                                children: [
                                  (0, t.jsx)(k.eb, {
                                    value: "1 page",
                                    children: "1 page",
                                  }),
                                  (0, t.jsx)(k.eb, {
                                    value: "2 pages",
                                    children: "2 pages",
                                  }),
                                  (0, t.jsx)(k.eb, {
                                    value: "3+ pages",
                                    children: "3+ pages",
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className: "space-y-3",
                        children: [
                          (0, t.jsxs)("div", {
                            className: "flex items-center space-x-2",
                            children: [
                              (0, t.jsx)(G.S, {
                                id: "hasGaps",
                                checked: e.hasGaps,
                                onCheckedChange: (e) => A("hasGaps", e),
                              }),
                              (0, t.jsx)(S.J, {
                                htmlFor: "hasGaps",
                                className: "text-sm font-normal cursor-pointer",
                                children: "I have employment gaps",
                              }),
                            ],
                          }),
                          (0, t.jsxs)("div", {
                            className: "flex items-center space-x-2",
                            children: [
                              (0, t.jsx)(G.S, {
                                id: "unconventionalBackground",
                                checked: e.unconventionalBackground,
                                onCheckedChange: (e) =>
                                  A("unconventionalBackground", e),
                              }),
                              (0, t.jsx)(S.J, {
                                htmlFor: "unconventionalBackground",
                                className: "text-sm font-normal cursor-pointer",
                                children:
                                  "Unconventional background (career change, late starter, etc.)",
                              }),
                            ],
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className: "flex gap-4 mt-6",
                    children: [
                      (0, t.jsxs)(w.$, {
                        onClick: () => {
                          if (
                            !e.country ||
                            !e.sector ||
                            !e.educationLevel ||
                            !e.currentLength
                          ) {
                            alert("Please fill in all required fields");
                            return;
                          }
                          (f(!0),
                            fetch("/api/tools/usage", {
                              method: "POST",
                              headers: { "Content-Type": "application/json" },
                              body: JSON.stringify({
                                toolSlug: "cv-comparison",
                              }),
                            }).catch(() => {}),
                            setTimeout(() => {
                              var e;
                              null ===
                                (e =
                                  document.getElementById(
                                    "comparison-results",
                                  )) ||
                                void 0 === e ||
                                e.scrollIntoView({
                                  behavior: "smooth",
                                  block: "start",
                                });
                            }, 100));
                        },
                        className:
                          "bg-orange hover:bg-orange-hover text-white px-8",
                        children: [
                          (0, t.jsx)(n.A, {
                            className: "w-5 h-5 mr-2",
                            "aria-hidden": "true",
                          }),
                          "Compare Formats",
                        ],
                      }),
                      (0, t.jsx)(E, {
                        toolName: "German CV Format Comparison",
                        url: "/tools/cv-comparison",
                      }),
                    ],
                  }),
                ],
              }),
              a &&
                e.country &&
                (0, t.jsxs)("div", {
                  id: "comparison-results",
                  className: "scroll-mt-8",
                  children: [
                    (0, t.jsx)(N, { selectedCountry: e.country }),
                    !y &&
                      (0, t.jsx)("section", {
                        className:
                          "mt-8 p-8 rounded-2xl bg-beige border border-border",
                        children: (0, t.jsxs)("div", {
                          className: "text-center max-w-2xl mx-auto",
                          children: [
                            (0, t.jsx)(o.A, {
                              className: "w-12 h-12 text-orange mx-auto mb-4",
                              "aria-hidden": "true",
                            }),
                            (0, t.jsx)("h3", {
                              className:
                                "text-2xl font-bold text-secondary mb-4",
                              children: "Get Expert Cultural Guidance",
                            }),
                            (0, t.jsx)("p", {
                              className: "text-muted-foreground mb-6",
                              children:
                                "Receive smart insights on cultural differences, fatal mistakes to avoid, sector-specific adjustments, and personalized transformation guidance for your CV.",
                            }),
                            (0, t.jsx)(w.$, {
                              onClick: P,
                              disabled: v,
                              className:
                                "bg-orange hover:bg-orange-hover text-white px-8",
                              children: v
                                ? (0, t.jsxs)(t.Fragment, {
                                    children: [
                                      (0, t.jsx)("div", {
                                        className:
                                          "w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin mr-2",
                                        "aria-hidden": "true",
                                      }),
                                      "Generating Guidance...",
                                    ],
                                  })
                                : (0, t.jsxs)(t.Fragment, {
                                    children: [
                                      (0, t.jsx)(o.A, {
                                        className: "w-5 h-5 mr-2",
                                        "aria-hidden": "true",
                                      }),
                                      "Get Expert Guidance",
                                    ],
                                  }),
                            }),
                          ],
                        }),
                      }),
                    y &&
                      (0, t.jsxs)("div", {
                        className: "space-y-8 mt-8",
                        children: [
                          (0, t.jsxs)("section", {
                            className:
                              "p-8 rounded-2xl bg-cream border border-border",
                            children: [
                              (0, t.jsxs)("h3", {
                                className:
                                  "text-xl font-bold text-secondary mb-6 flex items-center gap-3",
                                children: [
                                  (0, t.jsx)(o.A, {
                                    className: "w-6 h-6 text-orange",
                                    "aria-hidden": "true",
                                  }),
                                  "Cultural Psychology & Expectations",
                                ],
                              }),
                              (0, t.jsxs)("div", {
                                className: "grid md:grid-cols-2 gap-6",
                                children: [
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: "German Expectations",
                                      }),
                                      (0, t.jsx)("p", {
                                        className:
                                          "text-sm text-muted-foreground",
                                        children:
                                          y.culturalPsychology
                                            .germanExpectations,
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsxs)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: [e.country, " Context"],
                                      }),
                                      (0, t.jsx)("p", {
                                        className:
                                          "text-sm text-muted-foreground",
                                        children:
                                          y.culturalPsychology
                                            .homeCountryContext,
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: "Perception Gap",
                                      }),
                                      (0, t.jsx)("p", {
                                        className:
                                          "text-sm text-muted-foreground",
                                        children:
                                          y.culturalPsychology.perceptionGap,
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: "Professionalism Standards",
                                      }),
                                      (0, t.jsx)("p", {
                                        className:
                                          "text-sm text-muted-foreground",
                                        children:
                                          y.culturalPsychology
                                            .professionalismStandards,
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                          (0, t.jsxs)("section", {
                            className:
                              "p-8 rounded-2xl bg-beige border border-border",
                            children: [
                              (0, t.jsxs)("h3", {
                                className:
                                  "text-xl font-bold text-secondary mb-6 flex items-center gap-3",
                                children: [
                                  (0, t.jsx)(l.A, {
                                    className: "w-6 h-6 text-orange",
                                    "aria-hidden": "true",
                                  }),
                                  "Fatal Mistakes to Avoid",
                                ],
                              }),
                              (0, t.jsx)("div", {
                                className: "space-y-6",
                                children: y.fatalMistakes.map((e, s) =>
                                  (0, t.jsxs)(
                                    "div",
                                    {
                                      className: "p-6 rounded-xl bg-cream",
                                      children: [
                                        (0, t.jsxs)("h4", {
                                          className:
                                            "font-semibold text-secondary mb-4",
                                          children: [s + 1, ". ", e.mistake],
                                        }),
                                        (0, t.jsxs)("div", {
                                          className: "space-y-2 text-sm",
                                          children: [
                                            (0, t.jsxs)("p", {
                                              className:
                                                "text-muted-foreground",
                                              children: [
                                                (0, t.jsx)("span", {
                                                  className: "font-medium",
                                                  children: "Why it's wrong:",
                                                }),
                                                " ",
                                                e.whyWrong,
                                              ],
                                            }),
                                            (0, t.jsxs)("p", {
                                              className:
                                                "text-muted-foreground",
                                              children: [
                                                (0, t.jsx)("span", {
                                                  className: "font-medium",
                                                  children:
                                                    "German perception:",
                                                }),
                                                " ",
                                                e.germanPerception,
                                              ],
                                            }),
                                            (0, t.jsxs)("p", {
                                              className: "text-secondary",
                                              children: [
                                                (0, t.jsx)("span", {
                                                  className: "font-medium",
                                                  children: "How to fix:",
                                                }),
                                                " ",
                                                e.howToFix,
                                              ],
                                            }),
                                          ],
                                        }),
                                      ],
                                    },
                                    s,
                                  ),
                                ),
                              }),
                            ],
                          }),
                          (0, t.jsxs)("section", {
                            className:
                              "p-8 rounded-2xl bg-cream border border-border",
                            children: [
                              (0, t.jsxs)("h3", {
                                className:
                                  "text-xl font-bold text-secondary mb-6 flex items-center gap-3",
                                children: [
                                  (0, t.jsx)(c.A, {
                                    className: "w-6 h-6 text-orange",
                                    "aria-hidden": "true",
                                  }),
                                  e.sector,
                                  " Sector Adjustments",
                                ],
                              }),
                              (0, t.jsxs)("div", {
                                className: "space-y-6",
                                children: [
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: "Key Emphasis",
                                      }),
                                      (0, t.jsx)("p", {
                                        className:
                                          "text-sm text-muted-foreground",
                                        children:
                                          y.sectorAdjustments.keyEmphasis,
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: "Critical Skills",
                                      }),
                                      (0, t.jsx)("div", {
                                        className: "flex flex-wrap gap-2",
                                        children:
                                          y.sectorAdjustments.criticalSkills.map(
                                            (e, s) =>
                                              (0, t.jsx)(
                                                "span",
                                                {
                                                  className:
                                                    "px-3 py-1 rounded-full bg-beige text-orange text-sm",
                                                  children: e,
                                                },
                                                s,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: "German Expectations",
                                      }),
                                      (0, t.jsx)("p", {
                                        className:
                                          "text-sm text-muted-foreground",
                                        children:
                                          y.sectorAdjustments
                                            .germanExpectations,
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-2",
                                        children: "Example Language",
                                      }),
                                      (0, t.jsx)("ul", {
                                        className: "space-y-1",
                                        children:
                                          y.sectorAdjustments.exampleLanguage.map(
                                            (e, s) =>
                                              (0, t.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "text-sm text-muted-foreground flex items-start gap-2",
                                                  children: [
                                                    (0, t.jsx)(d.A, {
                                                      className:
                                                        "w-4 h-4 text-orange flex-shrink-0 mt-0.5",
                                                      "aria-hidden": "true",
                                                    }),
                                                    e,
                                                  ],
                                                },
                                                s,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                            ],
                          }),
                          y.difficultSituations.length > 0 &&
                            (0, t.jsxs)("section", {
                              className:
                                "p-8 rounded-2xl bg-beige border border-border",
                              children: [
                                (0, t.jsx)("h3", {
                                  className:
                                    "text-xl font-bold text-secondary mb-6",
                                  children: "Handling Difficult Situations",
                                }),
                                (0, t.jsx)("div", {
                                  className: "space-y-6",
                                  children: y.difficultSituations.map((e, s) =>
                                    (0, t.jsxs)(
                                      "div",
                                      {
                                        className: "p-6 rounded-xl bg-cream",
                                        children: [
                                          (0, t.jsx)("h4", {
                                            className:
                                              "font-semibold text-secondary mb-4",
                                            children: e.situation,
                                          }),
                                          (0, t.jsxs)("div", {
                                            className: "space-y-2 text-sm",
                                            children: [
                                              (0, t.jsxs)("p", {
                                                className:
                                                  "text-muted-foreground",
                                                children: [
                                                  (0, t.jsx)("span", {
                                                    className: "font-medium",
                                                    children: "German concern:",
                                                  }),
                                                  " ",
                                                  e.germanConcern,
                                                ],
                                              }),
                                              (0, t.jsxs)("p", {
                                                className:
                                                  "text-muted-foreground",
                                                children: [
                                                  (0, t.jsx)("span", {
                                                    className: "font-medium",
                                                    children: "How to address:",
                                                  }),
                                                  " ",
                                                  e.howToAddress,
                                                ],
                                              }),
                                              (0, t.jsxs)("div", {
                                                className:
                                                  "mt-4 p-4 rounded-lg bg-beige border border-border",
                                                children: [
                                                  (0, t.jsx)("p", {
                                                    className:
                                                      "text-xs text-muted-foreground mb-1",
                                                    children:
                                                      "Example phrasing:",
                                                  }),
                                                  (0, t.jsx)("p", {
                                                    className:
                                                      "text-sm text-secondary italic",
                                                    children: e.examplePhrasing,
                                                  }),
                                                ],
                                              }),
                                            ],
                                          }),
                                        ],
                                      },
                                      s,
                                    ),
                                  ),
                                }),
                              ],
                            }),
                          (0, t.jsxs)("section", {
                            className:
                              "p-8 rounded-2xl bg-cream border border-border",
                            children: [
                              (0, t.jsx)("h3", {
                                className:
                                  "text-xl font-bold text-secondary mb-6",
                                children: "Your CV Transformation Plan",
                              }),
                              (0, t.jsxs)("div", {
                                className: "grid md:grid-cols-2 gap-6 mb-6",
                                children: [
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-4",
                                        children: "Current Structure",
                                      }),
                                      (0, t.jsx)("ul", {
                                        className: "space-y-2",
                                        children:
                                          y.beforeAfterTransformation.currentStructure.map(
                                            (e, s) =>
                                              (0, t.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "flex items-center gap-2 text-sm text-muted-foreground",
                                                  children: [
                                                    (0, t.jsx)(l.A, {
                                                      className:
                                                        "w-4 h-4 text-orange flex-shrink-0",
                                                      "aria-hidden": "true",
                                                    }),
                                                    e,
                                                  ],
                                                },
                                                s,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("h4", {
                                        className:
                                          "font-semibold text-secondary mb-4",
                                        children: "Transformed Structure",
                                      }),
                                      (0, t.jsx)("ul", {
                                        className: "space-y-2",
                                        children:
                                          y.beforeAfterTransformation.transformedStructure.map(
                                            (e, s) =>
                                              (0, t.jsxs)(
                                                "li",
                                                {
                                                  className:
                                                    "flex items-center gap-2 text-sm text-muted-foreground",
                                                  children: [
                                                    (0, t.jsx)(m.A, {
                                                      className:
                                                        "w-4 h-4 text-secondary flex-shrink-0",
                                                      "aria-hidden": "true",
                                                    }),
                                                    e,
                                                  ],
                                                },
                                                s,
                                              ),
                                          ),
                                      }),
                                    ],
                                  }),
                                ],
                              }),
                              (0, t.jsxs)("div", {
                                className: "mb-6",
                                children: [
                                  (0, t.jsx)("h4", {
                                    className:
                                      "font-semibold text-secondary mb-4",
                                    children: "5 Key Changes to Make",
                                  }),
                                  (0, t.jsx)("div", {
                                    className: "space-y-2",
                                    children:
                                      y.beforeAfterTransformation.keyChanges.map(
                                        (e, s) =>
                                          (0, t.jsxs)(
                                            "div",
                                            {
                                              className:
                                                "flex items-start gap-3 p-4 rounded-lg bg-cream",
                                              children: [
                                                (0, t.jsx)("span", {
                                                  className:
                                                    "flex items-center justify-center w-6 h-6 rounded-full bg-beige text-secondary font-semibold text-sm flex-shrink-0",
                                                  children: s + 1,
                                                }),
                                                (0, t.jsx)("p", {
                                                  className:
                                                    "text-sm text-muted-foreground",
                                                  children: e,
                                                }),
                                              ],
                                            },
                                            s,
                                          ),
                                      ),
                                  }),
                                ],
                              }),
                              (0, t.jsx)("div", {
                                className: "p-4 rounded-xl bg-beige mb-6",
                                children: (0, t.jsxs)("p", {
                                  className: "text-sm text-secondary",
                                  children: [
                                    (0, t.jsx)("span", {
                                      className: "font-semibold",
                                      children: "Estimated Impact:",
                                    }),
                                    " ",
                                    y.beforeAfterTransformation.estimatedImpact,
                                  ],
                                }),
                              }),
                              (0, t.jsxs)("div", {
                                children: [
                                  (0, t.jsx)("p", {
                                    className:
                                      "text-sm text-muted-foreground mb-4",
                                    children:
                                      y.beforeAfterTransformation.nextSteps,
                                  }),
                                  (0, t.jsx)(M(), {
                                    href: "/dashboard/cv-builder?sector=".concat(
                                      encodeURIComponent(e.sector),
                                    ),
                                    children: (0, t.jsxs)(w.$, {
                                      className:
                                        "bg-secondary hover:bg-secondary/90 text-white",
                                      children: [
                                        (0, t.jsx)(x.A, {
                                          className: "w-5 h-5 mr-2",
                                          "aria-hidden": "true",
                                        }),
                                        "Create Your German CV Now",
                                      ],
                                    }),
                                  }),
                                ],
                              }),
                            ],
                          }),
                        ],
                      }),
                  ],
                }),
              (0, t.jsxs)("section", {
                className: "p-8 rounded-2xl bg-beige border border-border",
                children: [
                  (0, t.jsxs)("header", {
                    className: "flex items-center gap-3 mb-6",
                    children: [
                      (0, t.jsx)(m.A, {
                        className: "w-6 h-6 text-orange",
                        "aria-hidden": "true",
                      }),
                      (0, t.jsx)("h2", {
                        className: "text-2xl font-bold text-secondary",
                        children: "German CV Standard (DIN 5008)",
                      }),
                    ],
                  }),
                  (0, t.jsx)("p", {
                    className: "text-muted-foreground mb-6",
                    children:
                      "The German CV (Lebenslauf) follows the DIN 5008 format standard, which is the authoritative guideline for professional document formatting in Germany. This format is expected by German employers and is critical for Ausbildung applications.",
                  }),
                  (0, t.jsxs)("div", {
                    className: "grid md:grid-cols-3 gap-6 mb-6",
                    children: [
                      (0, t.jsxs)("div", {
                        className:
                          "p-4 rounded-xl bg-cream border border-border",
                        children: [
                          (0, t.jsx)("p", {
                            className: "text-sm text-muted-foreground mb-1",
                            children: "Length",
                          }),
                          (0, t.jsx)("p", {
                            className: "text-lg font-semibold text-secondary",
                            children: b.generalSpecs.length,
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className:
                          "p-4 rounded-xl bg-cream border border-border",
                        children: [
                          (0, t.jsx)("p", {
                            className: "text-sm text-muted-foreground mb-1",
                            children: "Photo",
                          }),
                          (0, t.jsx)("p", {
                            className: "text-lg font-semibold text-orange",
                            children: "Required",
                          }),
                        ],
                      }),
                      (0, t.jsxs)("div", {
                        className:
                          "p-4 rounded-xl bg-cream border border-border",
                        children: [
                          (0, t.jsx)("p", {
                            className: "text-sm text-muted-foreground mb-1",
                            children: "Format",
                          }),
                          (0, t.jsx)("p", {
                            className: "text-lg font-semibold text-secondary",
                            children: b.generalSpecs.format,
                          }),
                        ],
                      }),
                    ],
                  }),
                  (0, t.jsxs)("div", {
                    className: "space-y-4",
                    children: [
                      (0, t.jsx)("h3", {
                        className: "font-semibold text-secondary",
                        children: "Required Sections (in order):",
                      }),
                      (0, t.jsx)("div", {
                        className: "grid md:grid-cols-2 gap-4",
                        children: b.sections
                          .filter((e) => e.required)
                          .map((e) =>
                            (0, t.jsxs)(
                              "div",
                              {
                                className:
                                  "flex items-center gap-3 p-4 rounded-xl bg-cream",
                                children: [
                                  (0, t.jsx)("span", {
                                    className:
                                      "flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm",
                                    children: e.order,
                                  }),
                                  (0, t.jsxs)("div", {
                                    children: [
                                      (0, t.jsx)("p", {
                                        className:
                                          "font-medium text-secondary text-sm",
                                        children: e.name,
                                      }),
                                      (0, t.jsx)("p", {
                                        className:
                                          "text-xs text-muted-foreground",
                                        children: e.germanName,
                                      }),
                                    ],
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
              (0, t.jsx)(p.CTASection, {
                title: "Explore Verified Job Openings",
                description:
                  "Your German CV is ready - now discover live Ausbildung positions from verified employers actively hiring international talent.",
                action: {
                  text: "Browse Live Positions",
                  href: "/dashboard/jobs",
                  variant: "default",
                },
                secondaryAction: {
                  text: "Build Your CV",
                  href: "/dashboard/cv-builder".concat(
                    e.sector
                      ? "?sector=".concat(encodeURIComponent(e.sector))
                      : "",
                  ),
                  variant: "outline",
                },
                backgroundImage:
                  "/images/hero-background-germany-natural-autumn.webp",
              }),
              (0, t.jsx)(g.ToolFAQSection, { faqs: C }),
            ],
          }),
        });
      }
    },
  },
  (e) => {
    var s = (s) => e((e.s = s));
    (e.O(0, [46593, 36209, 84121, 72076, 77358], () => s(26130)),
      (_N_E = e.O()));
  },
]);
