@extends('frontoffice.layouts.app')

@section('title', 'Document Checklist Generator | GoAusbildung')

@section('meta')
    <meta name="description" content="Generate personalized document checklist based on your nationality, Ausbildung sector, and current situation.">
    <meta property="og:title" content="Document Checklist Generator | GoAusbildung">
    <meta property="og:description" content="Generate personalized document checklist based on your nationality, Ausbildung sector, and current situation.">
@endsection

@section('content')
          <main role="main" class="py-8 md:py-12">
            <div class="container px-4 md:px-6 max-w-7xl mx-auto">
              <div class="space-y-8">
                <div
                  class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige"
                >
                  <div class="mb-8">
                    <h2 class="text-2xl font-bold text-green mb-2">
                      Your Application Profile
                    </h2>
                    <p class="text-green/70">
                      Provide your details to generate a comprehensive document
                      checklist tailored to your specific situation.
                    </p>
                  </div>
                  <div class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <div class="space-y-2" data-error="false">
                        <label
                          class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-green font-semibold"
                          for="nationality"
                          >Nationality<!-- -->
                          <!-- -->*</label
                        ><button
                          type="button"
                          role="combobox"
                          aria-controls="radix-«R8b33peslb»"
                          aria-expanded="false"
                          aria-autocomplete="none"
                          dir="ltr"
                          data-state="closed"
                          data-placeholder=""
                          class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl border-beige"
                        >
                          <span style="pointer-events: none"
                            >Select your country</span
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
                          for="sector"
                          >Ausbildung Sector<!-- -->
                          <!-- -->*</label
                        ><button
                          type="button"
                          role="combobox"
                          aria-controls="radix-«R8j33peslb»"
                          aria-expanded="false"
                          aria-autocomplete="none"
                          dir="ltr"
                          data-state="closed"
                          data-placeholder=""
                          class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl border-beige"
                        >
                          <span style="pointer-events: none">Select sector</span
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
                          for="educationLevel"
                          >Education Level<!-- -->
                          <!-- -->*</label
                        ><button
                          type="button"
                          role="combobox"
                          aria-controls="radix-«R8r33peslb»"
                          aria-expanded="false"
                          aria-autocomplete="none"
                          dir="ltr"
                          data-state="closed"
                          data-placeholder=""
                          class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl border-beige"
                        >
                          <span style="pointer-events: none"
                            >Select education level</span
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
                          for="visaType"
                          >Visa Type<!-- -->
                          <!-- -->*</label
                        ><button
                          type="button"
                          role="combobox"
                          aria-controls="radix-«R9333peslb»"
                          aria-expanded="false"
                          aria-autocomplete="none"
                          dir="ltr"
                          data-state="closed"
                          data-placeholder=""
                          class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl border-beige"
                        >
                          <span style="pointer-events: none"
                            >Select visa type</span
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
                          for="familyStatus"
                          >Family Status<!-- -->
                          <!-- -->*</label
                        ><button
                          type="button"
                          role="combobox"
                          aria-controls="radix-«R9b33peslb»"
                          aria-expanded="false"
                          aria-autocomplete="none"
                          dir="ltr"
                          data-state="closed"
                          data-placeholder=""
                          class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl border-beige"
                        >
                          <span style="pointer-events: none"
                            >Select family status</span
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
                          for="budget"
                          >Budget Range<!-- -->
                          <!-- -->*</label
                        ><button
                          type="button"
                          role="combobox"
                          aria-controls="radix-«R9j33peslb»"
                          aria-expanded="false"
                          aria-autocomplete="none"
                          dir="ltr"
                          data-state="closed"
                          data-placeholder=""
                          class="flex h-12 w-full items-center justify-between border bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 rounded-xl border-beige"
                        >
                          <span style="pointer-events: none"
                            >Select budget range</span
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
                          for="currentLocation"
                          >Current Location (City, Country)<!-- -->
                          <!-- -->*</label
                        ><input
                          type="text"
                          class="flex h-10 w-full border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 rounded-xl border-beige"
                          id="currentLocation"
                          placeholder="e.g., Mumbai, India"
                          value=""
                        />
                      </div>
                      <div class="space-y-2" data-error="false">
                        <label
                          class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-green font-semibold"
                          for="timelineStartDate"
                          >Desired Start Date (Optional)<!-- --> </label
                        ><input
                          type="date"
                          class="flex h-10 w-full border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 rounded-xl border-beige"
                          id="timelineStartDate"
                          min="2026-01-09"
                          value=""
                        />
                        <p class="text-xs text-green/60">
                          When do you plan to start your Ausbildung?
                        </p>
                      </div>
                    </div>
                    <div class="flex flex-col items-center space-y-4 pt-4">
                      <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 text-base bg-orange hover:bg-orange-hover text-white rounded-full px-8"
                      >
                        Generate Document Checklist<svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="lucide lucide-arrow-right ml-2 h-5 w-5"
                        >
                          <path d="M5 12h14"></path>
                          <path d="m12 5 7 7-7 7"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
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
                          How to Use the Document Checklist Generator
                        </h2>
                        <p class="text-green/70">
                          Get a complete, personalized checklist of all required
                          documents for your Ausbildung visa application based
                          on your nationality and situation.
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
                              Enter Your Profile
                            </h4>
                            <p class="text-green/70 leading-relaxed">
                              Provide your nationality, sector, education level,
                              visa type, family status, and current location to
                              get accurate requirements.
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
                              Select Document Type
                            </h4>
                            <p class="text-green/70 leading-relaxed">
                              Choose your Ausbildung sector and visa type to
                              identify sector-specific and visa-specific
                              document requirements.
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
                              Get Your Checklist
                            </h4>
                            <p class="text-green/70 leading-relaxed">
                              Receive a comprehensive checklist with all
                              required documents, organized by category with
                              detailed descriptions.
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
                                Nationality
                              </h4>
                              <p class="text-sm text-green/70">
                                Your country of citizenship
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
                              <h4 class="font-bold text-green mb-1">Sector</h4>
                              <p class="text-sm text-green/70">
                                Healthcare, IT, Engineering, Hospitality, etc.
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
                                class="lucide lucide-award w-5 h-5 text-orange"
                              >
                                <path
                                  d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"
                                ></path>
                                <circle cx="12" cy="8" r="6"></circle>
                              </svg>
                            </div>
                            <div class="flex-1">
                              <h4 class="font-bold text-green mb-1">
                                Education Level
                              </h4>
                              <p class="text-sm text-green/70">
                                High School, Bachelor&#x27;s, Master&#x27;s,
                                PhD, etc.
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
                                class="lucide lucide-file-text w-5 h-5 text-orange"
                              >
                                <path
                                  d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                                ></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                              </svg>
                            </div>
                            <div class="flex-1">
                              <h4 class="font-bold text-green mb-1">
                                Visa Type
                              </h4>
                              <p class="text-sm text-green/70">
                                Ausbildung Training Visa, Work Visa, Student
                                Visa, etc.
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
                                Family Status
                              </h4>
                              <p class="text-sm text-green/70">
                                Single, Couple, With Children
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
                                Current Location
                              </h4>
                              <p class="text-sm text-green/70">
                                City and country where you currently live
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
                        <h3 class="text-xl font-bold text-green">
                          What You Get
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
                                class="lucide lucide-file-check w-5 h-5 text-green"
                              >
                                <path
                                  d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                                ></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="m9 15 2 2 4-4"></path>
                              </svg>
                            </div>
                            <div class="flex-1">
                              <h4 class="font-bold text-green mb-1">
                                Complete Checklist
                              </h4>
                              <p class="text-sm text-green/70">
                                All required documents organized by category
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
                                class="lucide lucide-map-pin w-5 h-5 text-green"
                              >
                                <path
                                  d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"
                                ></path>
                                <circle cx="12" cy="10" r="3"></circle>
                              </svg>
                            </div>
                            <div class="flex-1">
                              <h4 class="font-bold text-green mb-1">
                                Country-Specific Docs
                              </h4>
                              <p class="text-sm text-green/70">
                                Additional documents required based on your
                                nationality
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
                                Timeline
                              </h4>
                              <p class="text-sm text-green/70">
                                Estimated time to collect each document
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
                                Cost Estimates
                              </h4>
                              <p class="text-sm text-green/70">
                                Approximate costs for obtaining documents
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
                                class="lucide lucide-clock w-5 h-5 text-green"
                              >
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                              </svg>
                            </div>
                            <div class="flex-1">
                              <h4 class="font-bold text-green mb-1">
                                Processing Times
                              </h4>
                              <p class="text-sm text-green/70">
                                Expected processing duration for each document
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
                        Checklists are tailored to your nationality and include
                        country-specific requirements, embassy procedures, and
                        2026 visa regulations.
                      </p>
                    </div>
                  </div>
                </div>
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
                          Start Your Job Search Today
                        </h2>
                        <p
                          class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                        >
                          Now that you know what documents you need, explore
                          real job openings from verified German employers and
                          take the next step in your Ausbildung journey.
                        </p>
                        <div
                          class="flex flex-col sm:flex-row items-center gap-3"
                        >
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
                          >What documents are required for Ausbildung
                          application?</span
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
                          The core required documents include: valid passport,
                          birth certificate (apostilled), high school diploma
                          and transcripts (apostilled and translated), German
                          language certificate (B1/B2), Ausbildung training
                          contract from a German company, blocked account
                          confirmation (€11,208), health insurance proof, police
                          clearance certificate, CV/resume in German format, and
                          medical fitness certificate. Additional documents may
                          be required based on your specific situation,
                          nationality, and chosen sector.
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
                          >Do document requirements vary by nationality?</span
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
                          Yes, document requirements can vary significantly
                          based on your nationality. Some countries require
                          additional documents like TB test certificates, extra
                          financial proof, or specific educational evaluations.
                          Embassy requirements also differ - for example, Indian
                          applicants might need APS certificates, while Nigerian
                          applicants may face stricter financial documentation
                          requirements. Our tool provides country-specific
                          guidance to ensure you prepare the correct documents
                          for your nationality.
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
                          >What is apostille and which documents need it?</span
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
                          An apostille is an international certification that
                          authenticates the origin of a public document for use
                          in foreign countries under the Hague Convention.
                          Documents requiring apostille typically include: birth
                          certificate, marriage certificate (if applicable),
                          high school diploma and transcripts, university
                          degrees, police clearance certificate, and sometimes
                          medical certificates. The apostille must be obtained
                          from the issuing country&#x27;s designated authority
                          before submitting to the German embassy. Countries not
                          part of the Hague Convention need embassy legalization
                          instead.
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
                          >Do I need to translate all documents to German?</span
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
                          Yes, all documents not originally in German or English
                          must be translated to German by a certified
                          translator. This includes educational certificates,
                          birth certificates, marriage certificates, work
                          experience letters, and police clearance certificates.
                          The translation must be done by a sworn translator
                          (vereidigter Übersetzer) recognized by German
                          authorities. Some embassies maintain lists of approved
                          translators. Both original documents and certified
                          German translations must be submitted together.
                          Translation costs typically range from €30-100 per
                          document depending on length and complexity.
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
                          >How long are documents valid for the application
                          process?</span
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
                          Document validity varies: Police clearance
                          certificates are typically valid for 3-6 months from
                          issue date. Medical fitness certificates are usually
                          valid for 6 months. Bank statements should be recent
                          (within 3 months). Language certificates don&#x27;t
                          expire but should be recent (within 2 years
                          preferred). Birth certificates with apostille remain
                          valid indefinitely but some embassies prefer recent
                          issues (within 6 months). Passport must be valid for
                          at least 6 months beyond your intended stay. Health
                          insurance must cover the entire visa period. Always
                          check specific embassy requirements as validity
                          periods can vary.
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
                          >What is the total cost for document
                          preparation?</span
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
                          The total cost for document preparation typically
                          ranges from €2,000-4,000, excluding the blocked
                          account (€11,208). Major expenses include: blocked
                          account setup fees (€50-150), apostille services
                          (€20-50 per document), certified translations (€30-100
                          per document), German language course and B1/B2 exam
                          (€500-1,500), health insurance (€30-100/month),
                          passport photos (€10-20), police clearance (€20-100),
                          medical certificates (€50-100), visa application fee
                          (€75), and document courier services (€50-200). Costs
                          vary significantly by country - obtaining apostilles
                          and translations in some countries can be more
                          expensive.
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
                          >How long does it take to collect all documents?</span
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
                          The complete document collection process typically
                          takes 3-6 months, depending on your country and
                          situation. Timeline breakdown: Educational credential
                          evaluation (8-12 weeks), German language certificate
                          preparation (3-6 months for B1/B2 level), police
                          clearance certificate (4-8 weeks), apostille services
                          (2-6 weeks depending on country), blocked account
                          setup (2-4 weeks), medical certificates (2-3 weeks),
                          document translations (1-2 weeks per document). The
                          longest items are usually the German language
                          certificate and educational evaluations. It&#x27;s
                          recommended to start the process at least 6-9 months
                          before your intended Ausbildung start date.
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
                          >Where do I get documents in my home country?</span
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
                          Document sources vary by country but generally: Birth
                          certificates come from civil registry offices or vital
                          statistics departments. Educational certificates from
                          your school/university registrar. Police clearance
                          from national police headquarters or local police
                          stations (some countries have online systems).
                          Apostille services from the Ministry of Foreign
                          Affairs or designated apostille offices. Medical
                          certificates from licensed physicians or approved
                          medical centers. Translations from certified/sworn
                          translators (often listed on German embassy websites).
                          Each country has specific procedures - our
                          personalized guidance provides exact office names,
                          addresses, and procedures for your specific
                          nationality.
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
                          >What happens if I&#x27;m missing a document?</span
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
                          Missing documents can delay or result in rejection of
                          your visa application. If you&#x27;re missing a
                          required document: Contact the German embassy
                          immediately to discuss alternatives or extensions.
                          Some documents have acceptable substitutes (e.g.,
                          sponsorship letter instead of blocked account in rare
                          cases). For unavailable documents from your home
                          country, you may need a sworn affidavit explaining why
                          it cannot be obtained. Educational documents can
                          sometimes be replaced with school leaving certificates
                          if originals are lost. The Ausbildung contract is
                          non-negotiable and must be obtained. Never submit fake
                          or altered documents - this can result in a permanent
                          visa ban. Plan ahead and start collecting documents
                          early to avoid last-minute issues.
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
                          >Can I use digital copies or do I need original
                          documents?</span
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
                          For the initial visa application, most German
                          embassies accept certified copies or notarized
                          photocopies along with originals for verification.
                          However, you must bring original documents to your
                          visa interview for verification - they will be checked
                          against the copies. After visa approval, you&#x27;ll
                          need original documents for: residence permit
                          application in Germany, Anmeldung (registration) with
                          local authorities, and enrollment with your Ausbildung
                          company. Some documents like the Ausbildung contract,
                          blocked account confirmation, and health insurance
                          must be submitted as originals or certified copies.
                          Always maintain at least 2-3 certified copies of all
                          important documents, and keep digital scans as backup.
                          Never send original documents by regular mail - use
                          secure courier services.
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
                      Continue planning your Ausbildung journey with these
                      helpful tools
                    </p>
                  </div>
                  <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <a
                      class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                      href="{{ route('front.tools.pre-departure-checklist') }}"
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
                            class="lucide lucide-plane w-6 h-6 text-orange group-hover:text-white transition-colors"
                          >
                            <path
                              d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <h3
                        class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors"
                      >
                        Pre-Departure Checklist
                      </h3>
                      <p class="text-sm text-green/70 leading-relaxed mb-4">
                        Personalized checklist of everything you need before
                        moving to Germany
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
                    ><a
                      class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                      href="{{ route('front.tools.cover-letter') }}"
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
                            class="lucide lucide-file-text w-6 h-6 text-orange group-hover:text-white transition-colors"
                          >
                            <path
                              d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                            ></path>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                            <path d="M10 9H8"></path>
                            <path d="M16 13H8"></path>
                            <path d="M16 17H8"></path>
                          </svg>
                        </div>
                      </div>
                      <h3
                        class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors"
                      >
                        Cover Letter Generator
                      </h3>
                      <p class="text-sm text-green/70 leading-relaxed mb-4">
                        Generate a professional German cover letter for your
                        Ausbildung application
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
              </div>
            </div>
          </main>
        </div>
      </main>
@endsection
