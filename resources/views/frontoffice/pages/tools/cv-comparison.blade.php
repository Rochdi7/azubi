@extends('frontoffice.layouts.app')

@section('title', 'German CV vs Home Country CV | GoAusbildung')

@section('meta')
    <meta name="description" content="Compare German CV (Lebenslauf) format with your home country format and get specific adaptation recommendations.">
    <meta property="og:title" content="German CV vs Home Country CV | GoAusbildung">
    <meta property="og:description" content="Compare German CV (Lebenslauf) format with your home country format and get specific adaptation recommendations.">
@endsection

@section('content')
                  <p class="text-muted-foreground mb-6">
                    The German CV (Lebenslauf) follows the DIN 5008 format
                    standard, which is the authoritative guideline for
                    professional document formatting in Germany. This format is
                    expected by German employers and is critical for Ausbildung
                    applications.
                  </p>
                  <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <div class="p-4 rounded-xl bg-cream border border-border">
                      <p class="text-sm text-muted-foreground mb-1">Length</p>
                      <p class="text-lg font-semibold text-secondary">
                        2-3 pages maximum
                      </p>
                    </div>
                    <div class="p-4 rounded-xl bg-cream border border-border">
                      <p class="text-sm text-muted-foreground mb-1">Photo</p>
                      <p class="text-lg font-semibold text-orange">Required</p>
                    </div>
                    <div class="p-4 rounded-xl bg-cream border border-border">
                      <p class="text-sm text-muted-foreground mb-1">Format</p>
                      <p class="text-lg font-semibold text-secondary">
                        DIN 5008
                      </p>
                    </div>
                  </div>
                  <div class="space-y-4">
                    <h3 class="font-semibold text-secondary">
                      Required Sections (in order):
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                      <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-cream"
                      >
                        <span
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm"
                          >1</span
                        >
                        <div>
                          <p class="font-medium text-secondary text-sm">
                            Professional Photo
                          </p>
                          <p class="text-xs text-muted-foreground">
                            Bewerbungsfoto
                          </p>
                        </div>
                      </div>
                      <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-cream"
                      >
                        <span
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm"
                          >2</span
                        >
                        <div>
                          <p class="font-medium text-secondary text-sm">
                            Personal Information
                          </p>
                          <p class="text-xs text-muted-foreground">
                            Persönliche Daten
                          </p>
                        </div>
                      </div>
                      <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-cream"
                      >
                        <span
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm"
                          >3</span
                        >
                        <div>
                          <p class="font-medium text-secondary text-sm">
                            Work Experience
                          </p>
                          <p class="text-xs text-muted-foreground">
                            Berufserfahrung
                          </p>
                        </div>
                      </div>
                      <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-cream"
                      >
                        <span
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm"
                          >4</span
                        >
                        <div>
                          <p class="font-medium text-secondary text-sm">
                            Education
                          </p>
                          <p class="text-xs text-muted-foreground">
                            Ausbildung / Studium
                          </p>
                        </div>
                      </div>
                      <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-cream"
                      >
                        <span
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm"
                          >5</span
                        >
                        <div>
                          <p class="font-medium text-secondary text-sm">
                            Skills
                          </p>
                          <p class="text-xs text-muted-foreground">
                            Kenntnisse und Fähigkeiten
                          </p>
                        </div>
                      </div>
                      <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-cream"
                      >
                        <span
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm"
                          >6</span
                        >
                        <div>
                          <p class="font-medium text-secondary text-sm">
                            Languages
                          </p>
                          <p class="text-xs text-muted-foreground">
                            Sprachkenntnisse
                          </p>
                        </div>
                      </div>
                      <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-cream"
                      >
                        <span
                          class="flex items-center justify-center w-8 h-8 rounded-full bg-beige text-orange font-semibold text-sm"
                          >8</span
                        >
                        <div>
                          <p class="font-medium text-secondary text-sm">
                            Date and Signature
                          </p>
                          <p class="text-xs text-muted-foreground">
                            Ort, Datum und Unterschrift
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <div class="container mx-auto px-4 lg:px-6 my-16">
                  <section
                    class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg"
                  >
                    <img
                      alt="Background"
                      loading="lazy"
                      decoding="async"
                      data-nimg="fill"
                      class="object-cover object-center rounded-2xl"
                      style="
                        position: absolute;
                        height: 100%;
                        width: 100%;
                        left: 0;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        color: transparent;
                      "
                      sizes="(max-width: 768px) 100vw, (max-width: 1280px) 90vw, 1280px"
                      
                      src="{{ asset('assets/_next/hero-background-germany-natural-autumne4b3.jpeg') }}"
                    />
                    <div
                      class="absolute inset-0 bg-black/30 z-0 rounded-2xl"
                    ></div>
                    <div
                      class="absolute inset-0 z-[1] rounded-2xl"
                      style="
                        background:
                          radial-gradient(
                            ellipse at center,
                            transparent 0%,
                            transparent 40%,
                            rgba(0, 0, 0, 0.4) 100%
                          ),
                          linear-gradient(
                            to top,
                            rgba(0, 0, 0, 0.5) 0%,
                            transparent 30%
                          ),
                          linear-gradient(
                            to right,
                            rgba(0, 0, 0, 0.3) 0%,
                            transparent 15%
                          ),
                          linear-gradient(
                            to left,
                            rgba(0, 0, 0, 0.3) 0%,
                            transparent 15%
                          );
                      "
                    ></div>
                    <div
                      class="relative z-10 mx-auto flex max-w-container gap-8 px-6 sm:gap-10 md:px-12 flex-col items-center text-center"
                    >
                      <div class="flex flex-col gap-8 items-center text-center">
                        <h2
                          class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center"
                        >
                          Explore Verified Job Openings
                        </h2>
                        <p
                          class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                        >
                          Your German CV is ready - now discover live Ausbildung
                          positions from verified employers actively hiring
                          international talent.
                        </p>
                        <div
                          class="flex flex-col sm:flex-row items-center gap-3"
                        >
                          <a
                            href="{{ route('front.jobs') }}"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                            >Browse Live Positions</a
                          ><a
                            href="{{ route('front.consultation') }}"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                            >Build Your CV</a
                          >
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <section
                  class="bg-card border border-border rounded-lg p-6 md:p-8"
                >
                  <h3
                    class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-6"
                  >
                    Frequently Asked Questions
                  </h3>
                  <div class="space-y-4">
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >Is a photo required on a German CV?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          Yes, a professional photo (Bewerbungsfoto) is expected
                          on German CVs, though not legally required. It should
                          be a high-quality, passport-style photo (4.5 x 6 cm)
                          placed in the top-right corner or header. The photo
                          should show you in professional attire with a neutral
                          background. This differs significantly from countries
                          like the USA where photos are prohibited due to
                          anti-discrimination laws. German employers expect to
                          see your photo as part of making a personal connection
                          before the interview.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >What are the length requirements for a German CV
                          (Lebenslauf)?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          German CVs should be 2-3 pages maximum, following the
                          DIN 5008 standard. This is different from American
                          resumes (typically 1 page) or some Asian countries
                          where 4+ pages are acceptable. Quality over quantity
                          is key - include only relevant information presented
                          clearly. Fresh graduates can use 2 pages, while
                          experienced professionals may use up to 3 pages. Never
                          exceed 3 pages as German recruiters value conciseness
                          and efficiency.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >What personal information must be included on a
                          German CV?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          German CVs require: Full name, complete address, phone
                          number (mobile preferred with +49 country code),
                          professional email, date of birth, and nationality.
                          Optional but common: marital status and driving
                          license. NEVER include: religion, political
                          affiliation, parents&#x27; names, national ID numbers,
                          passport numbers, or physical characteristics
                          (height/weight). While birthdate is prohibited in
                          USA/UK CVs, it is expected in Germany. Always include
                          your nationality, especially as an international
                          applicant.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >How should dates be formatted in a German CV?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          Use the German date format: DD.MM.YYYY (e.g.,
                          15.01.2026) or MM/YYYY for date ranges (e.g., 03/2020
                          – 08/2023). Never use the American format MM/DD/YYYY.
                          For ongoing positions, use &quot;MM/YYYY –
                          Present&quot; or &quot;MM/YYYY – heute&quot; (German
                          for present). All work experience and education should
                          be listed in reverse chronological order (most recent
                          first). Consistency in date formatting throughout your
                          CV is critical - German recruiters notice formatting
                          inconsistencies immediately.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >What design style is acceptable for a German
                          CV?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          German CVs follow a conservative, professional design
                          following DIN 5008 standards. Use standard fonts
                          (Arial, Calibri, Times New Roman) in 11-12pt for body
                          text and 14-16pt for headings. Stick to black text
                          with minimal accent colors (one accent color maximum).
                          Avoid creative designs, graphics, infographics,
                          colorful backgrounds, or decorative elements. While
                          some modern templates exist, traditional formats are
                          safest for Ausbildung applications. German recruiters
                          prioritize clear structure and readability over
                          creative design. Save creativity for portfolios, not
                          CVs.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >Are hobbies and interests necessary on a German
                          CV?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          While optional, a hobbies section (Hobbys und
                          Interessen) is valued in German CVs and recommended.
                          It shows personality and cultural fit beyond
                          professional qualifications. Choose 3-5 hobbies that
                          demonstrate positive traits: team sports show
                          Teamfähigkeit (teamwork), volunteering shows social
                          responsibility, creative pursuits show innovation. Be
                          specific: &quot;Marathon running (completed 5
                          marathons)&quot; is better than &quot;Fitness&quot;.
                          Avoid controversial activities, political/religious
                          affiliations, or passive hobbies like &quot;watching
                          TV&quot;. Germans appreciate well-rounded candidates
                          who can integrate into workplace culture.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >How should I handle employment gaps in my German
                          CV?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          Employment gaps MUST be explained in German CVs -
                          unexplained gaps raise serious red flags. Include gap
                          periods with honest explanations: &quot;Job Search
                          &amp; Professional Development (03/2023 –
                          08/2023)&quot;, &quot;Parental Leave&quot;,
                          &quot;Language Studies - German B2 Course&quot;,
                          &quot;Health Recovery&quot;, or &quot;Family
                          Caregiving&quot;. Germans value honesty (Ehrlichkeit)
                          and transparency. If you used gap time productively
                          (learning German, freelancing, volunteering, courses),
                          highlight these activities. Brief gaps (1-3 months)
                          between jobs are acceptable without explanation.
                          Longer gaps need clear, honest justification.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >What is the main difference between a German
                          Lebenslauf and American Resume?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          Key differences: 1) Length: German Lebenslauf is 2-3
                          pages vs American Resume 1-2 pages. 2) Photo: Required
                          in Germany, prohibited in USA. 3) Personal info:
                          Germans include birthdate and nationality; Americans
                          exclude both. 4) Structure: German CVs are detailed
                          and chronological; American resumes are
                          achievement-focused with summary sections. 5) Design:
                          German CVs follow conservative DIN 5008 format;
                          American resumes can be more creative/ATS-optimized.
                          6) Gaps: Must be explained in Germany; less
                          scrutinized in USA. 7) References: Provided separately
                          in Germany; often included in USA. The German
                          Lebenslauf emphasizes thorough documentation while
                          American resumes prioritize concise achievements.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >Should I include references on my German CV?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          No, do not list references directly on your German CV.
                          The phrase &quot;References available upon
                          request&quot; is also unnecessary and outdated.
                          Instead, prepare a separate reference sheet with 2-3
                          professional references (name, title, company,
                          relationship to you, contact information) to provide
                          when specifically requested. Some German application
                          processes ask for references later in the hiring
                          process. Focus your CV space on your qualifications,
                          experience, and skills rather than references. If an
                          Ausbildung posting specifically requests references,
                          provide them in a separate document, not on the CV
                          itself.
                        </div>
                      </div>
                    </div>
                    <div
                      class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200"
                    >
                      <button
                        class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                        aria-expanded="false"
                      >
                        <span class="font-semibold text-foreground pr-4"
                          >What are the most common mistakes international
                          applicants make on German CVs?</span
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200"
                        >
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                      <div
                        class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
                      >
                        <div
                          class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed"
                        >
                          Top 10 mistakes: 1) Omitting professional photo or
                          using casual selfies. 2) Not including birthdate
                          (required in Germany). 3) Using creative/colorful
                          designs instead of conservative DIN 5008 format. 4)
                          Leaving employment gaps unexplained. 5) Using wrong
                          date format (MM/DD/YYYY instead of DD.MM.YYYY). 6)
                          Including prohibited information (religion,
                          parents&#x27; names, ID numbers). 7) Not specifying
                          German language level with CEFR certification. 8)
                          Writing a 1-page &quot;resume&quot; instead of proper
                          2-3 page Lebenslauf. 9) Including salary expectations
                          on CV (belongs in cover letter only). 10) Forgetting
                          signature and date at the bottom. Avoid these mistakes
                          to significantly improve your chances with German
                          employers.
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </main>
        </div>
      </main>
@endsection
