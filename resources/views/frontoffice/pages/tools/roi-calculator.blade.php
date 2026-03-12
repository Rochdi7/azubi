@extends('frontoffice.layouts.app')

@section('title', 'Ausbildung ROI Calculator | GoAusbildung')

@section('meta')
    <meta name="description" content="Calculate the financial benefits of German vocational training compared to other education options with 5-year projection.">
    <meta property="og:title" content="Ausbildung ROI Calculator | GoAusbildung">
    <meta property="og:description" content="Calculate the financial benefits of German vocational training compared to other education options with 5-year projection.">
@endsection

@section('content')
          <main role="main" class="py-8 md:py-12">
            <div class="container px-4 md:px-6 max-w-7xl mx-auto">
              <div
                class="text-card-foreground shadow p-6 rounded-2xl border-2 bg-cream border-beige"
              >
                <div class="flex items-start gap-4">
                  <div class="p-3 rounded-xl flex-shrink-0 bg-green text-cream">
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
                      class="lucide lucide-calculator h-6 w-6"
                    >
                      <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                      <line x1="8" x2="16" y1="6" y2="6"></line>
                      <line x1="16" x2="16" y1="14" y2="18"></line>
                      <path d="M16 10h.01"></path>
                      <path d="M12 10h.01"></path>
                      <path d="M8 10h.01"></path>
                      <path d="M12 14h.01"></path>
                      <path d="M8 14h.01"></path>
                      <path d="M12 18h.01"></path>
                      <path d="M8 18h.01"></path>
                    </svg>
                  </div>
                  <div class="flex-1 space-y-2">
                    <h2 class="text-xl font-semibold text-green">
                      Calculate Your Ausbildung ROI
                    </h2>
                    <p class="text-green/70 text-sm leading-relaxed">
                      Discover the true financial benefits of German vocational
                      training. This calculator analyzes your total investment,
                      monthly stipend earnings (€850-€1,300), and post-training
                      salary potential to show exactly when you&#x27;ll break
                      even and your long-term financial gains compared to
                      university education.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige"
              >
                <div class="mb-8">
                  <h2 class="text-2xl font-bold text-green mb-2">
                    Enter Your Details
                  </h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                  <div class="space-y-2" data-error="false">
                    <label
                      class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-green font-semibold"
                      for="sector"
                      >Ausbildung Sector<!-- -->
                      <!-- -->*</label
                    ><button
                      type="button"
                      role="combobox"
                      aria-controls="radix-«R8m53peslb»"
                      aria-expanded="false"
                      aria-autocomplete="none"
                      dir="ltr"
                      data-state="closed"
                      data-placeholder=""
                      class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                    >
                      <span style="pointer-events: none">Select a sector</span
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
                  </div>
                  <div class="space-y-2" data-error="false">
                    <label
                      class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-green font-semibold"
                      for="trainingDuration"
                      >Training Duration (years)<!-- --> </label
                    ><span
                      dir="ltr"
                      data-orientation="horizontal"
                      aria-disabled="false"
                      class="relative flex w-full touch-none select-none items-center"
                      id="trainingDuration"
                      style="--radix-slider-thumb-transform: translateX(-50%)"
                      ><span
                        data-orientation="horizontal"
                        class="relative h-2 w-full grow overflow-hidden rounded-full bg-beige"
                        ><span
                          data-orientation="horizontal"
                          class="absolute h-full bg-primary"
                          style="left: 0%; right: 33.33333333333333%"
                        ></span></span
                      ><span
                        style="
                          transform: var(--radix-slider-thumb-transform);
                          position: absolute;
                          left: calc(0% + 0px);
                        "
                        ><span
                          role="slider"
                          aria-valuemin="2"
                          aria-valuemax="3.5"
                          aria-orientation="horizontal"
                          data-orientation="horizontal"
                          tabindex="0"
                          class="block h-5 w-5 rounded-full border-2 border-primary bg-white shadow-md ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:scale-110"
                          style="display: none"
                          data-radix-collection-item=""
                        ></span
                        ><input style="display: none" /></span
                    ></span>
                    <p class="text-xs text-green/60">3 years</p>
                  </div>
                  <div class="space-y-2" data-error="false">
                    <label
                      class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-green font-semibold"
                      for="initialCosts"
                      >Initial Investment (€)<!-- -->
                    </label>
                    <div class="space-y-2">
                      <div class="text-sm text-muted-foreground text-right">
                        14000<!-- -->€
                      </div>
                      <span
                        dir="ltr"
                        data-orientation="horizontal"
                        aria-disabled="false"
                        class="relative flex w-full touch-none select-none items-center"
                        id="initialCosts"
                        style="--radix-slider-thumb-transform: translateX(-50%)"
                        ><span
                          data-orientation="horizontal"
                          class="relative h-2 w-full grow overflow-hidden rounded-full bg-beige"
                          ><span
                            data-orientation="horizontal"
                            class="absolute h-full bg-primary"
                            style="left: 0%; right: 60%"
                          ></span></span
                        ><span
                          style="
                            transform: var(--radix-slider-thumb-transform);
                            position: absolute;
                            left: calc(0% + 0px);
                          "
                          ><span
                            role="slider"
                            aria-valuemin="10000"
                            aria-valuemax="20000"
                            aria-orientation="horizontal"
                            data-orientation="horizontal"
                            tabindex="0"
                            class="block h-5 w-5 rounded-full border-2 border-primary bg-white shadow-md ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:scale-110"
                            style="display: none"
                            data-radix-collection-item=""
                          ></span
                          ><input style="display: none" /></span
                      ></span>
                    </div>
                    <p class="text-xs text-green/60">
                      Includes visa costs, flights, setup costs in Germany and
                      language preparation
                    </p>
                  </div>
                  <div class="space-y-2" data-error="false">
                    <label
                      class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-green font-semibold"
                      for="monthlyExpenses"
                      >Monthly Expenses (€)<!-- -->
                    </label>
                    <div class="space-y-2">
                      <div class="text-sm text-muted-foreground text-right">
                        750<!-- -->€
                      </div>
                      <span
                        dir="ltr"
                        data-orientation="horizontal"
                        aria-disabled="false"
                        class="relative flex w-full touch-none select-none items-center"
                        id="monthlyExpenses"
                        style="--radix-slider-thumb-transform: translateX(-50%)"
                        ><span
                          data-orientation="horizontal"
                          class="relative h-2 w-full grow overflow-hidden rounded-full bg-beige"
                          ><span
                            data-orientation="horizontal"
                            class="absolute h-full bg-primary"
                            style="left: 0%; right: 62.5%"
                          ></span></span
                        ><span
                          style="
                            transform: var(--radix-slider-thumb-transform);
                            position: absolute;
                            left: calc(0% + 0px);
                          "
                          ><span
                            role="slider"
                            aria-valuemin="600"
                            aria-valuemax="1000"
                            aria-orientation="horizontal"
                            data-orientation="horizontal"
                            tabindex="0"
                            class="block h-5 w-5 rounded-full border-2 border-primary bg-white shadow-md ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:scale-110"
                            style="display: none"
                            data-radix-collection-item=""
                          ></span
                          ><input style="display: none" /></span
                      ></span>
                    </div>
                    <p class="text-xs text-green/60">
                      Includes rent, food, transportation, health insurance,
                      etc.
                    </p>
                  </div>
                  <div class="space-y-2 md:col-span-2" data-error="false">
                    <label
                      class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-green font-semibold"
                      for="germanLevel"
                      >Current German Level<!-- --> </label
                    ><button
                      type="button"
                      role="combobox"
                      aria-controls="radix-«Ram53peslb»"
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
                    <p class="text-xs text-green/60">
                      This affects language course costs in your initial
                      investment
                    </p>
                  </div>
                </div>
                <div class="space-y-4 mt-8">
                  <div class="flex gap-4">
                    <button
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex-1 bg-orange hover:bg-orange/90 rounded-full"
                      disabled=""
                    >
                      Calculate ROI<svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-calculator ml-2 h-4 w-4"
                      >
                        <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                        <line x1="8" x2="16" y1="6" y2="6"></line>
                        <line x1="16" x2="16" y1="14" y2="18"></line>
                        <path d="M16 10h.01"></path>
                        <path d="M12 10h.01"></path>
                        <path d="M8 10h.01"></path>
                        <path d="M12 14h.01"></path>
                        <path d="M8 14h.01"></path>
                        <path d="M12 18h.01"></path>
                        <path d="M8 18h.01"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="flex justify-center -mt-4 mb-8"></div>
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
                        How to Use the ROI Calculator
                      </h2>
                      <p class="text-green/70">
                        Calculate your return on investment for Ausbildung vs
                        home country career. Compare earnings, costs, and
                        long-term financial benefits.
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
                            Select Your Sector
                          </h4>
                          <p class="text-green/70 leading-relaxed">
                            Choose the Ausbildung sector that matches your
                            career goals. Different sectors offer different
                            stipend ranges and post-training salaries.
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
                            Enter Your Details
                          </h4>
                          <p class="text-green/70 leading-relaxed">
                            Configure your training duration, initial costs,
                            monthly expenses, and current German level to get
                            personalized calculations.
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
                            Compare ROI Results
                          </h4>
                          <p class="text-green/70 leading-relaxed">
                            Review your complete financial breakdown including
                            break-even point, 5-year earnings projection, and
                            monthly balance during training.
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
                              class="lucide lucide-building2 w-5 h-5 text-orange"
                            >
                              <path
                                d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"
                              ></path>
                              <path
                                d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"
                              ></path>
                              <path
                                d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"
                              ></path>
                              <path d="M10 6h4"></path>
                              <path d="M10 10h4"></path>
                              <path d="M10 14h4"></path>
                              <path d="M10 18h4"></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Ausbildung Sector
                            </h4>
                            <p class="text-sm text-green/70">
                              Choose from Healthcare, IT, Engineering, etc.
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
                              class="lucide lucide-clock w-5 h-5 text-orange"
                            >
                              <circle cx="12" cy="12" r="10"></circle>
                              <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Years of Experience
                            </h4>
                            <p class="text-sm text-green/70">
                              Training duration (2-3.5 years)
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
                              class="lucide lucide-wallet w-5 h-5 text-orange"
                            >
                              <path
                                d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"
                              ></path>
                              <path
                                d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Home Country Salary
                            </h4>
                            <p class="text-sm text-green/70">
                              Initial investment including visa, flights, setup
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
                              Monthly Budget
                            </h4>
                            <p class="text-sm text-green/70">
                              Living expenses during training
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
                              class="lucide lucide-trending-up w-5 h-5 text-green"
                            >
                              <polyline
                                points="22 7 13.5 15.5 8.5 10.5 2 17"
                              ></polyline>
                              <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">Total ROI</h4>
                            <p class="text-sm text-green/70">
                              Complete return on investment calculation
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
                              class="lucide lucide-target w-5 h-5 text-green"
                            >
                              <circle cx="12" cy="12" r="10"></circle>
                              <circle cx="12" cy="12" r="6"></circle>
                              <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Breakeven Point
                            </h4>
                            <p class="text-sm text-green/70">
                              Time to recover your initial investment
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
                              Lifetime Earnings
                            </h4>
                            <p class="text-sm text-green/70">
                              5-year earnings projection after training
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
                              class="lucide lucide-wallet w-5 h-5 text-green"
                            >
                              <path
                                d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"
                              ></path>
                              <path
                                d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"
                              ></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Net Savings
                            </h4>
                            <p class="text-sm text-green/70">
                              Your net position after training completion
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
                              class="lucide lucide-chart-no-axes-column-increasing w-5 h-5 text-green"
                            >
                              <line x1="12" x2="12" y1="20" y2="10"></line>
                              <line x1="18" x2="18" y1="20" y2="4"></line>
                              <line x1="6" x2="6" y1="20" y2="16"></line>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Career Growth
                            </h4>
                            <p class="text-sm text-green/70">
                              Salary progression with annual increases
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
                              class="lucide lucide-calculator w-5 h-5 text-green"
                            >
                              <rect
                                width="16"
                                height="20"
                                x="4"
                                y="2"
                                rx="2"
                              ></rect>
                              <line x1="8" x2="16" y1="6" y2="6"></line>
                              <line x1="16" x2="16" y1="14" y2="18"></line>
                              <path d="M16 10h.01"></path>
                              <path d="M12 10h.01"></path>
                              <path d="M8 10h.01"></path>
                              <path d="M12 14h.01"></path>
                              <path d="M8 14h.01"></path>
                              <path d="M12 18h.01"></path>
                              <path d="M8 18h.01"></path>
                            </svg>
                          </div>
                          <div class="flex-1">
                            <h4 class="font-bold text-green mb-1">
                              Investment Analysis
                            </h4>
                            <p class="text-sm text-green/70">
                              Monthly balance and total costs breakdown
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
                      All calculations factor in German living costs, tax rates,
                      Ausbildung salary progression, and opportunity costs to
                      give you accurate financial projections.
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
                        >What is the Ausbildung ROI Calculator?</span
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
                        The Ausbildung ROI Calculator is a free financial
                        planning tool that helps you calculate the Return on
                        Investment (ROI) for German vocational training
                        programs. It analyzes total costs (blocked account,
                        living expenses, insurance, visa fees), training stipend
                        earnings (typically €850-€1,300/month), and
                        post-training salary potential to determine how quickly
                        your investment pays back and your long-term financial
                        gains.
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
                        >How does the ROI Calculator work?</span
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
                        The calculator works by: (1) Collecting your planned
                        expenses (blocked account €11,904, monthly living costs,
                        insurance, travel), (2) Factoring in Ausbildung stipend
                        earnings over 3 years (varies by sector:
                        €850-€1,300/month), (3) Calculating post-training salary
                        potential (€2,500-€4,000/month depending on sector), (4)
                        Determining total investment, total earnings during
                        training, and break-even point, (5) Comparing ROI with
                        alternative education paths like university degrees.
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
                        >What costs are included in the Ausbildung ROI
                        calculation?</span
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
                        The calculator includes all major costs: (1) Blocked
                        Account: €11,904 for 2025 (mandatory financial proof),
                        (2) Living Expenses: €700-€1,200/month (rent, food,
                        utilities, transport), (3) Health Insurance:
                        €110-€120/month, (4) Visa &amp; Permit Fees: €75-€100,
                        (5) Travel Costs: €500-€2,000 (flights to Germany), (6)
                        Language Courses: €300-€800 (if needed), (7) Other Setup
                        Costs: €500-€1,000 (deposits, initial expenses). Total
                        typical investment: €20,000-€35,000 for the 3-year
                        program.
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
                        >How much stipend will I earn during Ausbildung?</span
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
                        Ausbildung stipend (training salary) varies by sector
                        and training year: Year 1: €850-€1,050/month, Year 2:
                        €950-€1,150/month, Year 3: €1,050-€1,300/month.
                        Healthcare and IT sectors typically offer higher
                        stipends (€1,100-€1,300 in Year 3), while hospitality
                        may be lower (€850-€1,000). Total earnings over 3 years
                        typically range from €33,000 to €42,000, which
                        significantly offsets your initial investment.
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
                        >What is the typical payback period for Ausbildung
                        investment?</span
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
                        The payback period (time to recover your investment)
                        typically ranges from 1-3 years after completing
                        Ausbildung. For example, if you invest €25,000 total and
                        earn a post-training salary of €3,000/month
                        (€36,000/year), with living costs of €1,000/month
                        (€12,000/year), your annual savings are €24,000. Minus
                        the €33,000-€42,000 you already earned during training,
                        you often break even within 1-2 years post-graduation.
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
                        >How does Ausbildung ROI compare to a university
                        degree?</span
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
                        Ausbildung typically offers better short-term ROI than
                        university: (1) Ausbildung: 3 years, earn
                        €33,000-€42,000 during training, start work immediately,
                        break even in 1-3 years. (2) University: 3-4 years, no
                        earnings (or minimal part-time), higher total costs
                        (€30,000-€60,000), break even in 4-7 years. However,
                        university may offer higher long-term earnings in some
                        fields. The calculator helps you compare both paths
                        based on your specific situation.
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
                        >What salary can I expect after completing
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
                        Post-Ausbildung salaries vary by sector: Healthcare
                        (Nursing): €2,800-€3,500/month, IT &amp; Technology:
                        €3,000-€4,000/month, Engineering: €2,800-€3,800/month,
                        Business Administration: €2,500-€3,200/month,
                        Hospitality: €2,200-€2,800/month. With experience (5-10
                        years), salaries can increase to €3,500-€5,500/month.
                        The calculator uses sector-specific salary data to
                        project your earnings.
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
                        >Is the ROI Calculator accurate?</span
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
                        The calculator provides highly accurate estimates based
                        on official data from: (1) German Federal Foreign Office
                        (visa and blocked account requirements), (2) IHK -
                        Chamber of Commerce (stipend ranges by sector), (3)
                        German Federal Statistical Office (living costs, salary
                        data), (4) GoAusbildung internal data from 1000+
                        successful placements. However, actual costs and
                        earnings can vary based on city, company, and individual
                        circumstances. Use it as a planning tool, not an
                        absolute guarantee.
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
                        >Can I factor in scholarships or financial aid in the
                        calculator?</span
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
                        Yes, the calculator allows you to input any
                        scholarships, grants, or financial aid you receive. This
                        reduces your total investment amount and improves your
                        ROI significantly. Common sources include: DAAD
                        scholarships (up to €850/month), company-sponsored
                        training (some companies cover blocked account),
                        government grants, and family support. Enter these
                        amounts to see how they impact your break-even timeline.
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
                        >What factors can improve my Ausbildung ROI?</span
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
                        You can improve your ROI by: (1) Choosing high-paying
                        sectors (Healthcare, IT, Engineering), (2) Living in
                        affordable cities (Leipzig, Dresden vs Munich,
                        Frankfurt), (3) Securing scholarships or company
                        sponsorships, (4) Working part-time (up to 20
                        hours/week) during training, (5) Minimizing initial
                        costs (shared housing, used furniture), (6) Completing
                        language training in home country (cheaper than in
                        Germany), (7) Negotiating higher starting salary after
                        training completion.
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
                    href="{{ route('front.tools.living-cost-calculator') }}"
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
                          class="lucide lucide-house w-6 h-6 text-orange group-hover:text-white transition-colors"
                        >
                          <path
                            d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                          ></path>
                          <path
                            d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <h3
                      class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors"
                    >
                      Living Cost Calculator
                    </h3>
                    <p class="text-sm text-green/70 leading-relaxed mb-4">
                      Estimate monthly living costs in different German cities
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
                    href="{{ route('front.tools.ausbildung-vs-university-comparison') }}"
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
                          class="lucide lucide-graduation-cap w-6 h-6 text-orange group-hover:text-white transition-colors"
                        >
                          <path
                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"
                          ></path>
                          <path d="M22 10v6"></path>
                          <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                        </svg>
                      </div>
                    </div>
                    <h3
                      class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors"
                    >
                      Ausbildung vs University
                    </h3>
                    <p class="text-sm text-green/70 leading-relaxed mb-4">
                      Compare Ausbildung and university pathways to find your
                      best fit
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
                        >comparison</span
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
                    
                    src="{{ asset('assets/_next/arbeitgeber-hero-backgroundaa3f.jpeg') }}"
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
                        Ready to Apply? Browse Live Positions
                      </h2>
                      <p
                        class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                      >
                        Explore verified job openings from German employers
                        seeking international talent. Start your Ausbildung
                        journey today.
                      </p>
                      <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a
                          href="../dashboard/jobs.html"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                          >Browse Jobs</a
                        ><a
                          href="{{ route('front.contact') }}"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                          >Book Consultation</a
                        >
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
