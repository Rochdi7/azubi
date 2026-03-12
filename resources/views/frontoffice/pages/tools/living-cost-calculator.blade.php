@extends('frontoffice.layouts.app')

@section('title', 'Living Cost Calculator | GoAusbildung')

@section('meta')
    <meta name="description" content="Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.">
    <meta property="og:title" content="Living Cost Calculator | GoAusbildung">
    <meta property="og:description" content="Estimate monthly living expenses by city including rent, food, transport, insurance, and entertainment costs across Germany.">
@endsection

@section('content')
          <main role="main" class="py-8 md:py-12">
            <div class="container px-4 md:px-6 max-w-7xl mx-auto">
              <section
                class="bg-beige border-2 border-border rounded-xl p-8 mb-8"
              >
                <div class="flex items-start gap-4">
                  <div class="p-4 bg-orange rounded-xl" aria-hidden="true">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide lucide-info h-6 w-6 text-white"
                    >
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 16v-4"></path>
                      <path d="M12 8h.01"></path>
                    </svg>
                  </div>
                  <div>
                    <h3 class="font-semibold text-secondary mb-2">
                      Official 2026 Cost Data
                    </h3>
                    <p class="text-sm text-muted-foreground">
                      This calculator uses official data from
                      <strong class="text-orange"
                        >DAAD and German Federal Statistical Office
                        (Destatis)</strong
                      >
                      for 2026-2027. Costs are based on actual student/trainee
                      expenses. The €992/month blocked account requirement is
                      separate from these calculations. First-month setup costs
                      (€2,500-4,500) are not included in monthly calculations.
                    </p>
                  </div>
                </div>
              </section>
              <div
                class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige"
              >
                <div class="mb-8">
                  <h2 class="text-2xl font-bold text-green mb-2">
                    Calculate Your Monthly Costs
                  </h2>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                  <div class="space-y-4">
                    <label
                      class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                      for="city"
                      >German City</label
                    ><button
                      type="button"
                      role="combobox"
                      aria-controls="radix-«R8m53peslb»"
                      aria-expanded="false"
                      aria-autocomplete="none"
                      dir="ltr"
                      data-state="closed"
                      class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                    >
                      <span style="pointer-events: none"></span
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
                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                        aria-hidden="true"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg></button
                    ><select
                      aria-hidden="true"
                      tabindex="-1"
                      style="
                        position: absolute;
                        border: 0;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        white-space: nowrap;
                        word-wrap: normal;
                      "
                    ></select>
                    <p class="text-xs text-muted-foreground">
                      Capital city, startup hub, diverse culture, improving but
                      still moderate costs
                    </p>
                  </div>
                  <div class="space-y-4">
                    <label
                      class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                      for="accommodation"
                      >Accommodation Type</label
                    ><button
                      type="button"
                      role="combobox"
                      aria-controls="radix-«R9653peslb»"
                      aria-expanded="false"
                      aria-autocomplete="none"
                      dir="ltr"
                      data-state="closed"
                      class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                    >
                      <span style="pointer-events: none"></span
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
                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                        aria-hidden="true"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg></button
                    ><select
                      aria-hidden="true"
                      tabindex="-1"
                      style="
                        position: absolute;
                        border: 0;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        white-space: nowrap;
                        word-wrap: normal;
                      "
                    ></select>
                    <p class="text-xs text-muted-foreground">
                      Shared apartments (WG) are most popular among trainees
                    </p>
                  </div>
                  <div class="space-y-4">
                    <label
                      class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                      for="lifestyle"
                      >Lifestyle &amp; Spending</label
                    ><button
                      type="button"
                      role="combobox"
                      aria-controls="radix-«R9m53peslb»"
                      aria-expanded="false"
                      aria-autocomplete="none"
                      dir="ltr"
                      data-state="closed"
                      class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                    >
                      <span style="pointer-events: none"></span
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
                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                        aria-hidden="true"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg></button
                    ><select
                      aria-hidden="true"
                      tabindex="-1"
                      style="
                        position: absolute;
                        border: 0;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        white-space: nowrap;
                        word-wrap: normal;
                      "
                    ></select>
                    <p class="text-xs text-muted-foreground">
                      Affects food and miscellaneous spending
                    </p>
                  </div>
                  <div class="space-y-4">
                    <label
                      class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                      for="sector"
                      >Ausbildung Sector</label
                    ><button
                      type="button"
                      role="combobox"
                      aria-controls="radix-«Ra653peslb»"
                      aria-expanded="false"
                      aria-autocomplete="none"
                      dir="ltr"
                      data-state="closed"
                      class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                    >
                      <span style="pointer-events: none"></span
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
                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                        aria-hidden="true"
                      >
                        <path d="m6 9 6 6 6-6"></path>
                      </svg></button
                    ><select
                      aria-hidden="true"
                      tabindex="-1"
                      style="
                        position: absolute;
                        border: 0;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        white-space: nowrap;
                        word-wrap: normal;
                      "
                    ></select>
                    <p class="text-xs text-muted-foreground">
                      Auto-fills average stipend for your sector
                    </p>
                  </div>
                  <div class="space-y-4">
                    <label
                      class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                      for="customStipend"
                      >Monthly Stipend (€)</label
                    ><input
                      type="number"
                      class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                      id="customStipend"
                      min="0"
                      max="3000"
                      value="1250"
                    />
                    <p class="text-xs text-muted-foreground">
                      Your expected monthly Ausbildung income
                    </p>
                  </div>
                  <div class="space-y-4">
                    <label
                      class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex items-center gap-2"
                      ><button
                        type="button"
                        role="checkbox"
                        aria-checked="false"
                        data-state="unchecked"
                        value="on"
                        class="peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20"
                      ></button
                      ><input
                        type="checkbox"
                        aria-hidden="true"
                        tabindex="-1"
                        style="
                          position: absolute;
                          pointer-events: none;
                          opacity: 0;
                          margin: 0;
                          transform: translateX(-100%);
                        "
                        value="on"
                      /><span>Include Partner / Dependent</span></label
                    >
                    <p class="text-xs text-muted-foreground pl-6">
                      Adds ~40% to total costs (shared accommodation, higher
                      food/misc)
                    </p>
                  </div>
                </div>
                <div class="space-y-4 mt-8">
                  <div class="flex gap-4">
                    <button
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex-1 bg-orange hover:bg-orange-hover rounded-full"
                    >
                      Calculate Living Costs<svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-house ml-2 h-4 w-4"
                        aria-hidden="true"
                      >
                        <path
                          d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                        ></path>
                        <path
                          d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="flex justify-center mb-8"></div>
              <div class="mt-8 mb-8 space-y-6">
                <div class="bg-beige border-2 border-border rounded-2xl p-6">
                  <div class="flex items-start gap-4">
                    <div class="p-3 bg-orange rounded-xl flex-shrink-0">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-info h-6 w-6 text-white"
                      >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4"></path>
                        <path d="M12 8h.01"></path>
                      </svg>
                    </div>
                    <div class="flex-1">
                      <h2 class="text-2xl font-bold text-green mb-2">
                        How to Use the Living Cost Calculator
                      </h2>
                      <p class="text-green/70">
                        Estimate monthly living expenses in different German
                        cities. Compare costs and plan your budget for
                        accommodation, food, transport, and more.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                  <h3 class="text-xl font-bold text-green mb-6">
                    How It Works
                  </h3>
                  <div class="grid gap-4">
                    <div
                      class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200"
                    >
                      <div class="flex items-start gap-4">
                        <div
                          class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0"
                        >
                          1
                        </div>
                        <div class="flex-1">
                          <h4 class="font-bold text-green text-lg mb-2">
                            Select Your City
                          </h4>
                          <p class="text-green/70 leading-relaxed">
                            Choose from 15 German cities across 4 cost tiers,
                            from most expensive (Munich, Frankfurt) to most
                            affordable (Leipzig, Dresden).
                          </p>
                        </div>
                        <div class="hidden lg:flex items-center">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-arrow-right w-5 h-5 text-orange/50"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200"
                    >
                      <div class="flex items-start gap-4">
                        <div
                          class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0"
                        >
                          2
                        </div>
                        <div class="flex-1">
                          <h4 class="font-bold text-green text-lg mb-2">
                            Choose Living Preferences
                          </h4>
                          <p class="text-green/70 leading-relaxed">
                            Select your accommodation type (dormitory, shared
                            flat, studio, apartment) and lifestyle preferences
                            (budget, moderate, comfortable).
                          </p>
                        </div>
                        <div class="hidden lg:flex items-center">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-arrow-right w-5 h-5 text-orange/50"
                          >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200"
                    >
                      <div class="flex items-start gap-4">
                        <div
                          class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0"
                        >
                          3
                        </div>
                        <div class="flex-1">
                          <h4 class="font-bold text-green text-lg mb-2">
                            Get Cost Breakdown
                          </h4>
                          <p class="text-green/70 leading-relaxed">
                            Receive detailed monthly cost estimates including
                            rent, food, transport, insurance, utilities, and
                            entertainment. See how your Ausbildung stipend
                            covers expenses.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-6">
                  <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                    <div class="flex items-center gap-3 mb-6">
                      <div class="p-2 bg-orange rounded-lg">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-info w-5 h-5 text-white"
                        >
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="M12 16v-4"></path>
                          <path d="M12 8h.01"></path>
                        </svg>
                      </div>
                      <h3 class="text-xl font-bold text-green">
                        What You Provide
                      </h3>
                    </div>
                    <div class="space-y-4">
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-map-pin w-5 h-5 text-orange"
                            >
                              <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"
                              ></path>
                              <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              City Selection
                            </h4>
                            <p class="text-sm text-green/70">
                              Choose from 15 cities across Germany, grouped by
                              cost tier
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-house w-5 h-5 text-orange"
                            >
                              <path
                                d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                              ></path>
                              <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Accommodation Type
                            </h4>
                            <p class="text-sm text-green/70">
                              Dormitory, shared apartment (WG), studio, or
                              1-bedroom apartment
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-users w-5 h-5 text-orange"
                            >
                              <path
                                d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                              ></path>
                              <circle cx="9" cy="7" r="4"></circle>
                              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Lifestyle Choice
                            </h4>
                            <p class="text-sm text-green/70">
                              Budget-conscious, moderate spending, or
                              comfortable lifestyle
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-euro w-5 h-5 text-orange"
                            >
                              <path d="M4 10h12"></path>
                              <path d="M4 14h9"></path>
                              <path
                                d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Monthly Stipend
                            </h4>
                            <p class="text-sm text-green/70">
                              Your expected Ausbildung sector and monthly
                              training salary
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                    <div class="flex items-center gap-3 mb-6">
                      <div class="p-2 bg-green rounded-lg">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-info w-5 h-5 text-white"
                        >
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="M12 16v-4"></path>
                          <path d="M12 8h.01"></path>
                        </svg>
                      </div>
                      <h3 class="text-xl font-bold text-green">What You Get</h3>
                    </div>
                    <div class="space-y-4">
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-euro w-5 h-5 text-green"
                            >
                              <path d="M4 10h12"></path>
                              <path d="M4 14h9"></path>
                              <path
                                d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Total Monthly Cost
                            </h4>
                            <p class="text-sm text-green/70">
                              Complete breakdown of all living expenses in your
                              chosen city
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-house w-5 h-5 text-green"
                            >
                              <path
                                d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                              ></path>
                              <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Accommodation Costs
                            </h4>
                            <p class="text-sm text-green/70">
                              Rent estimates based on your selected housing type
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-shopping-cart w-5 h-5 text-green"
                            >
                              <circle cx="8" cy="21" r="1"></circle>
                              <circle cx="19" cy="21" r="1"></circle>
                              <path
                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Food &amp; Groceries
                            </h4>
                            <p class="text-sm text-green/70">
                              Monthly food expenses based on your lifestyle
                              choice
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-building w-5 h-5 text-green"
                            >
                              <rect
                                width="16"
                                height="20"
                                x="4"
                                y="2"
                                rx="2"
                                ry="2"
                              ></rect>
                              <path d="M9 22v-4h6v4"></path>
                              <path d="M8 6h.01"></path>
                              <path d="M16 6h.01"></path>
                              <path d="M12 6h.01"></path>
                              <path d="M12 10h.01"></path>
                              <path d="M12 14h.01"></path>
                              <path d="M16 10h.01"></path>
                              <path d="M16 14h.01"></path>
                              <path d="M8 10h.01"></path>
                              <path d="M8 14h.01"></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Transport Costs
                            </h4>
                            <p class="text-sm text-green/70">
                              Public transportation and mobility expenses
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-zap w-5 h-5 text-green"
                            >
                              <path
                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Utilities &amp; Internet
                            </h4>
                            <p class="text-sm text-green/70">
                              Electricity, heating, water, and internet costs
                            </p>
                          </div>
                        </div>
                      </div>
                      <div
                        class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200"
                      >
                        <div class="flex items-start gap-3">
                          <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-calendar w-5 h-5 text-green"
                            >
                              <path d="M8 2v4"></path>
                              <path d="M16 2v4"></path>
                              <rect
                                width="18"
                                height="18"
                                x="3"
                                y="4"
                                rx="2"
                              ></rect>
                              <path d="M3 10h18"></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Entertainment Budget
                            </h4>
                            <p class="text-sm text-green/70">
                              Leisure activities, dining out, and miscellaneous
                              expenses
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="bg-orange/10 border-2 border-orange/20 rounded-2xl p-5"
                >
                  <div class="flex items-start gap-3">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide lucide-info w-5 h-5 text-orange flex-shrink-0 mt-0.5"
                    >
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 16v-4"></path>
                      <path d="M12 8h.01"></path>
                    </svg>
                    <p class="text-green/80 leading-relaxed">
                      Cost estimates are based on 2026 data from official German
                      statistics and student surveys. Actual costs may vary
                      based on lifestyle choices.
                    </p>
                  </div>
                </div>
              </div>
              <section
                class="bg-card border border-border rounded-lg p-6 md:p-8 mb-8"
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
                        >How much does it cost to live in Germany as an
                        Ausbildung trainee in 2026?</span
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
                        Living costs for Ausbildung trainees in Germany range
                        from €800-2,200 per month depending on the city and
                        lifestyle. In affordable cities like Leipzig or Dresden,
                        you can live comfortably on €900-1,300/month. In
                        expensive cities like Munich or Frankfurt, expect
                        €1,600-2,200/month. Most trainees earn €900-1,300/month
                        during Ausbildung, which covers basic living costs in
                        moderate-cost cities. The official blocked account
                        requirement is €992/month (€11,904/year) for visa
                        purposes.
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
                        >Which German cities are most affordable for Ausbildung
                        trainees?</span
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
                        The most affordable German cities for Ausbildung are
                        Leipzig (€900-1,300/month), Dresden (€850-1,250/month),
                        Bochum (€800-1,200/month), Chemnitz (€780-1,180/month),
                        and Erfurt (€850-1,280/month). These Tier 4 cities offer
                        significantly lower rent (€300-500 for shared apartments
                        vs €500-800 in Munich), cheaper food, and lower
                        transportation costs. Despite lower costs, these cities
                        have strong Ausbildung opportunities in manufacturing,
                        healthcare, IT, and engineering sectors.
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
                        >Can I survive on my Ausbildung stipend alone without
                        additional income?</span
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
                        Yes, but it depends on the city and your lifestyle
                        choices. In affordable cities (Leipzig, Dresden,
                        Bochum), an Ausbildung stipend of €1,000-1,200/month
                        covers all basic living costs comfortably. In
                        moderate-cost cities (Berlin, Hannover), you can manage
                        with careful budgeting. In expensive cities (Munich,
                        Frankfurt), your stipend may not fully cover living
                        costs, creating a monthly deficit of €200-400. Many
                        trainees work part-time (up to 20 hours/week allowed) to
                        supplement income, earning an additional €400-600/month
                        at €12-15/hour.
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
                        >What is included in the €992/month visa requirement for
                        Germany?</span
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
                        The €992/month (€11,904/year) blocked account
                        requirement is the minimum financial proof required for
                        a German student/Ausbildung visa in 2026. This amount
                        must be deposited before visa application and covers
                        basic living expenses including accommodation
                        (€350-600), food (€200-300), health insurance (€120),
                        transportation (€30-50), and miscellaneous costs
                        (€100-200). However, actual living costs often exceed
                        this amount in expensive cities like Munich or Hamburg,
                        where €1,500-2,000/month is more realistic.
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
                        >How do living costs vary between Munich and
                        Leipzig?</span
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
                        Munich is 50-80% more expensive than Leipzig. In Munich,
                        shared apartments cost €500-800/month vs €330-520 in
                        Leipzig. Total monthly costs in Munich average
                        €1,600-2,200 (budget to comfortable lifestyle) compared
                        to €900-1,300 in Leipzig. Specific differences: rent is
                        €300-400 higher, food costs 15-20% more, and
                        miscellaneous expenses are 30-40% higher in Munich.
                        However, Munich offers higher Ausbildung stipends
                        (€1,200-1,500 vs €900-1,100) and better post-Ausbildung
                        salaries, partially offsetting the cost difference.
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
                        >Is student accommodation (dormitory) cheaper than
                        private apartments in Germany?</span
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
                        Yes, student dormitories are significantly cheaper,
                        costing €180-500/month compared to €500-1,500 for
                        private studios or €300-800 for shared apartments.
                        Dormitories typically include utilities, internet, and
                        sometimes furniture, making them the most cost-effective
                        option. However, dormitory availability is limited with
                        waiting lists of 6-12 months in popular cities. Shared
                        apartments (WG - Wohngemeinschaft) offer a good middle
                        ground at €300-600/month, combining affordability with
                        independence and social interaction with roommates.
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
                        >What are typical food costs for Ausbildung trainees in
                        Germany in 2026?</span
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
                        Food costs range from €125-450/month depending on
                        lifestyle. Budget lifestyle (cooking at home, discount
                        supermarkets like Aldi/Lidl): €125-220/month. Moderate
                        lifestyle (mix of cooking and occasional dining out):
                        €175-320/month. Comfortable lifestyle (regular dining
                        out, premium groceries): €255-450/month. Tips to save:
                        use student Mensas (€2.50-5/meal), shop at discount
                        supermarkets, use apps like Too Good To Go for
                        discounted food, join Foodsharing networks, and cook in
                        batches to reduce waste.
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
                        >Can I work part-time during Ausbildung to cover
                        additional living costs?</span
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
                        Yes, Ausbildung trainees can work part-time up to 20
                        hours per week (120 full days or 240 half days per year)
                        without affecting visa status. Typical part-time wages
                        are €12-15/hour (minimum wage €12.82 in 2026),
                        generating €400-600/month additional income. Popular
                        part-time jobs: weekend shifts at hospitals/care homes
                        (€15-18/hour), retail/hospitality (€12-14/hour),
                        tutoring (€15-25/hour), delivery services (€13-16/hour).
                        Important: Check with your Ausbildung employer first, as
                        some contracts may restrict additional employment during
                        training hours.
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
                        >What initial costs should I budget for my first month
                        in Germany?</span
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
                        First-month costs are significantly higher than regular
                        monthly expenses. Budget €2,500-4,500 for initial setup:
                        Security deposit (3 months rent: €900-2,400), first
                        month rent (€300-800), registration fees (€30-50),
                        health insurance activation (€120), residence permit
                        application (€100), bedding/kitchenware (€200-400),
                        winter clothing (€150-300), German SIM card (€10-30),
                        bike or transport ticket (€30-100), and emergency buffer
                        (€300-500). Plan to have this amount PLUS the €11,904
                        blocked account ready before arrival.
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
                        >How much should I save before arriving in Germany for
                        Ausbildung?</span
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
                        Save €14,000-17,000 total before arrival: €11,904 for
                        blocked account (visa requirement), €2,500-4,500 for
                        first-month setup costs, and €500-1,000 emergency buffer
                        for unexpected expenses. This ensures financial security
                        during the first 2-3 months while you settle, find
                        accommodation, and receive your first Ausbildung stipend
                        (usually paid at month-end). If possible, save an
                        additional €2,000-3,000 for flexibility with
                        accommodation choices and to avoid financial stress
                        during the adjustment period. Consider currency exchange
                        rates when transferring funds from your home country.
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mb-8">
                <div class="mb-6">
                  <h2 class="text-2xl font-bold text-green mb-2">
                    Related Tools You Might Need
                  </h2>
                  <p class="text-green/70">
                    Continue planning your Ausbildung journey with these helpful
                    tools
                  </p>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mb-6">
                  <a
                    class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                    href="{{ route('front.tools.blocked-account-calculator') }}"
                    ><div class="mb-4">
                      <div
                        class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-wallet w-6 h-6 text-orange group-hover:text-white transition-colors"
                        >
                          <path
                            d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"
                          ></path>
                          <path
                            d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <h3
                      class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors"
                    >
                      Blocked Account Calculator
                    </h3>
                    <p class="text-sm text-green/70 leading-relaxed mb-4">
                      Calculate blocked account costs and compare providers for
                      your German visa
                    </p>
                    <div
                      class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all"
                    >
                      <span>Try it free</span
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
                        class="lucide lucide-arrow-right w-4 h-4"
                      >
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </div>
                    <div class="absolute top-4 right-4">
                      <span
                        class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize"
                        >financial</span
                      >
                    </div></a
                  ><a
                    class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                    href="{{ route('front.tools.roi-calculator') }}"
                    ><div class="mb-4">
                      <div
                        class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-trending-up w-6 h-6 text-orange group-hover:text-white transition-colors"
                        >
                          <polyline
                            points="22 7 13.5 15.5 8.5 10.5 2 17"
                          ></polyline>
                          <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>
                      </div>
                    </div>
                    <h3
                      class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors"
                    >
                      ROI Calculator
                    </h3>
                    <p class="text-sm text-green/70 leading-relaxed mb-4">
                      Calculate return on investment for Ausbildung vs your home
                      country career
                    </p>
                    <div
                      class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all"
                    >
                      <span>Try it free</span
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
                        class="lucide lucide-arrow-right w-4 h-4"
                      >
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </div>
                    <div class="absolute top-4 right-4">
                      <span
                        class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize"
                        >financial</span
                      >
                    </div></a
                  ><a
                    class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                    href="{{ route('front.tools.application-timeline') }}"
                    ><div class="mb-4">
                      <div
                        class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-calendar w-6 h-6 text-orange group-hover:text-white transition-colors"
                        >
                          <path d="M8 2v4"></path>
                          <path d="M16 2v4"></path>
                          <rect
                            width="18"
                            height="18"
                            x="3"
                            y="4"
                            rx="2"
                          ></rect>
                          <path d="M3 10h18"></path>
                        </svg>
                      </div>
                    </div>
                    <h3
                      class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors"
                    >
                      Application Timeline
                    </h3>
                    <p class="text-sm text-green/70 leading-relaxed mb-4">
                      Create a personalized timeline for your Ausbildung
                      application process
                    </p>
                    <div
                      class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all"
                    >
                      <span>Try it free</span
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
                        class="lucide lucide-arrow-right w-4 h-4"
                      >
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                      </svg>
                    </div>
                    <div class="absolute top-4 right-4">
                      <span
                        class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize"
                        >planning</span
                      >
                    </div></a
                  >
                </div>
                <div class="text-center">
                  <a
                    class="inline-flex items-center gap-2 px-6 py-3 bg-orange hover:bg-orange-hover text-white rounded-full font-semibold transition-colors"
                    href="{{ route('front.tools') }}"
                    >Browse All Tools<svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="lucide lucide-arrow-right w-4 h-4"
                    >
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path></svg
                  ></a>
                </div>
              </section>
              <section
                class="bg-beige rounded-xl border-2 border-border p-8 text-center"
              >
                <h3 class="text-2xl font-semibold text-secondary mb-4">
                  Need Help Planning Your Ausbildung Budget?
                </h3>
                <p class="text-muted-foreground mb-8 max-w-2xl mx-auto">
                  Create your free account to access personalized tools, find
                  affordable cities that match your Ausbildung sector, and start
                  planning your move to Germany.
                </p>
                <a
                  href="../auth7d2a.html?signup"
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base bg-orange hover:bg-orange-hover rounded-full"
                  >Plan Your Move</a
                >
              </section>
            </div>
          </main>
        </div>
      </main>
@endsection
