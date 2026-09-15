      <header>
          <div class="relative w-full">
              <!-- Desktop spacer -->
              <div class="w-full hidden sm:block transition-all duration-300 h-24"></div>
              <!-- Desktop Nav -->
              <div class="fixed left-0 right-0 z-50 pt-5 pb-5 w-full hidden sm:block transition-all duration-300 top-0">
                  <div class="flex items-center justify-center gap-1 md:gap-3 px-2">
                      <div
                          class="flex items-center bg-background/80 border border-border backdrop-blur-lg py-0.5 px-1 md:px-1.5 rounded-full shadow-lg relative z-10 gap-1 md:gap-3">
                          <div class="px-0.5 md:px-1">
                              <a class="inline-flex items-center select-none gap-[2px] px-0"
                                  href="{{ route('front.index') }}">
                                  <img alt="Azubi logo" loading="eager" width="56" height="56"
                                      class="object-contain flex-shrink-0 mt-[2px] h-10 w-10"
                                      src="{{ asset('assets/images/logo/logo-mark-160.png') }}" style="color: transparent;">
                                  <span class="font-bold text-[#2C3340] text-lg"
                                      style="letter-spacing: -0.02em;">Azubi</span>
                              </a>
                          </div>
                          <div class="relative ml-2 md:ml-3">
                              <a class="relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors hover:text-primary bg-muted text-primary px-3 md:px-6"
                                  href="{{ route('front.index') }}">
                                  <span>Home</span>
                                  <div class="absolute inset-0 w-full bg-primary/5 rounded-full -z-10"
                                      style="transform: none; transform-origin: 50% 50% 0px; opacity: 1;">
                                      <div
                                          class="absolute -top-2 left-1/2 -translate-x-1/2 w-8 h-1 bg-primary rounded-t-full">
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="relative">
                              <a class="relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors text-foreground/80 hover:text-primary px-3 md:px-6"
                                  href="{{ route('front.jobs') }}"><span>Jobs</span></a>
                          </div>
                          {{-- Tools dropdown commented out for now
                          <div class="azubi-nav-has-dropdown">
                              <button
                                  class="azubi-nav-dropdown-trigger relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors flex items-center text-foreground/80 hover:text-primary px-3 md:px-6">
                                  <span>Tools</span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-chevron-down ml-1 h-4 w-4">
                                      <path d="m6 9 6 6 6-6"></path>
                                  </svg>
                              </button>
                              <div class="azubi-nav-dropdown-panel absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[520px] bg-white/95 backdrop-blur-lg border border-border rounded-2xl shadow-xl p-4 opacity-0 invisible transition-all duration-200"
                                  style="display:none;">
                                  <p
                                      class="px-3 py-2 text-xs font-medium text-muted-foreground uppercase tracking-wider">
                                      Tools</p>
                                  <div class="grid grid-cols-2 gap-1">
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.tools.eligibility-checker') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M21 10.5V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12.5">
                                                  </path>
                                                  <path d="m9 11 3 3L22 4"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Eligibility Checker</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.tools.living-cost-calculator') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                                  <line x1="8" x2="16" y1="6" y2="6">
                                                  </line>
                                                  <line x1="16" x2="16" y1="14" y2="18">
                                                  </line>
                                                  <path d="M16 10h.01"></path>
                                                  <path d="M12 10h.01"></path>
                                                  <path d="M8 10h.01"></path>
                                                  <path d="M12 14h.01"></path>
                                                  <path d="M8 14h.01"></path>
                                                  <path d="M12 18h.01"></path>
                                                  <path d="M8 18h.01"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Living Cost Calculator</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.tools.roi-calculator') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                  <polyline points="16 7 22 7 22 13"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">ROI Calculator</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.tools.document-checklist') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <rect width="8" height="4" x="8" y="2" rx="1"
                                                      ry="1"></rect>
                                                  <path
                                                      d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                  </path>
                                                  <path d="M12 11h4"></path>
                                                  <path d="M12 16h4"></path>
                                                  <path d="M8 11h.01"></path>
                                                  <path d="M8 16h.01"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Document Checklist</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.tools.career-pathway-decision') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <circle cx="6" cy="19" r="3"></circle>
                                                  <path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"></path>
                                                  <circle cx="18" cy="5" r="3"></circle>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Career Pathway</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.tools.cover-letter') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                  </path>
                                                  <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                  <path d="M10 9H8"></path>
                                                  <path d="M16 13H8"></path>
                                                  <path d="M16 17H8"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Cover Letter Generator</span>
                                      </a>
                                  </div>
                                  <a class="flex items-center justify-center gap-2 mt-3 w-full py-3 rounded-xl bg-[#5D5DE9] hover:bg-[#2C3340] text-white text-sm font-semibold transition-all duration-200"
                                      href="{{ route('front.tools') }}">
                                      <span>View All 13 Tools</span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                          <path d="M5 12h14"></path>
                                          <path d="m12 5 7 7-7 7"></path>
                                      </svg>
                                  </a>
                              </div>
                          </div>
                          --}}
                          <div class="hidden xl:block azubi-nav-has-dropdown">
                              <button
                                  class="azubi-nav-dropdown-trigger relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors flex items-center text-foreground/80 hover:text-primary px-3 md:px-6">
                                  <span>Sectors</span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-chevron-down ml-1 h-4 w-4">
                                      <path d="m6 9 6 6 6-6"></path>
                                  </svg>
                              </button>
                              <div class="azubi-nav-dropdown-panel absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[480px] bg-white/95 backdrop-blur-lg border border-border rounded-2xl shadow-xl p-3 opacity-0 invisible transition-all duration-200"
                                  style="display:none;">
                                  <p
                                      class="px-3 py-2 text-xs font-medium text-muted-foreground uppercase tracking-wider">
                                      Sectors</p>
                                  <div class="grid grid-cols-2 gap-1">
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.sector', ['slug' => 'healthcare']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Healthcare &amp; Nursing</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.sector', ['slug' => 'it']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <polyline points="16 18 22 12 16 6"></polyline>
                                                  <polyline points="8 6 2 12 8 18"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">IT &amp; Software</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.sector', ['slug' => 'engineering']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Engineering &amp; Technical</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.sector', ['slug' => 'automotive']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2">
                                                  </path>
                                                  <circle cx="7" cy="17" r="2"></circle>
                                                  <path d="M9 17h6"></path>
                                                  <circle cx="17" cy="17" r="2"></circle>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Automotive &amp; Transportation</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.sector', ['slug' => 'hospitality']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M2 20v-8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8"></path>
                                                  <path d="M4 10V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4"></path>
                                                  <path d="M12 4v6"></path>
                                                  <path d="M2 18h20"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Hospitality &amp; Tourism</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.sector', ['slug' => 'construction']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"></path>
                                                  <path d="M14 6a6 6 0 0 1 6 6v3"></path>
                                                  <path d="M4 15v-3a6 6 0 0 1 6-6"></path>
                                                  <rect x="2" y="15" width="20" height="4" rx="1">
                                                  </rect>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Construction &amp; Trades</span>
                                      </a>
                                  </div>
                                  <a class="flex items-center justify-center gap-2 mt-2 py-2.5 px-4 rounded-full bg-[#5D5DE9] text-white hover:bg-[#2C3340] text-sm font-semibold transition-all duration-200"
                                      href="{{ route('front.sectors') }}">
                                      <span>View All 15 Sectors</span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                          <path d="M5 12h14"></path>
                                          <path d="m12 5 7 7-7 7"></path>
                                      </svg>
                                  </a>
                              </div>
                          </div>
                          <div class="azubi-nav-has-dropdown">
                              <button
                                  class="azubi-nav-dropdown-trigger relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors flex items-center text-foreground/80 hover:text-primary px-3 md:px-6">
                                  <span>Learn</span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-chevron-down ml-1 h-4 w-4">
                                      <path d="m6 9 6 6 6-6"></path>
                                  </svg>
                              </button>
                              <div class="azubi-nav-dropdown-panel absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[520px] bg-white/95 backdrop-blur-lg border border-border rounded-2xl shadow-xl p-3 opacity-0 invisible transition-all duration-200"
                                  style="display:none; max-height: 80vh; overflow-y: auto;">
                                  <p
                                      class="px-3 py-2 text-xs font-medium text-muted-foreground uppercase tracking-wider">
                                      Learn</p>
                                  <div class="grid grid-cols-2 gap-1">
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.ausbildung-germany') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M12 7v14"></path>
                                                  <path
                                                      d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Ausbildung in Germany</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.ausbildung-basics') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                                  </path>
                                                  <path d="M22 10v6"></path>
                                                  <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Ausbildung Basics</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.why-ausbildung') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Why Choose Ausbildung</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.programs') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <circle cx="11" cy="11" r="8"></circle>
                                                  <path d="m21 21-4.3-4.3"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Finding Programs</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.requirements') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                  </path>
                                                  <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Requirements</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.language') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="m5 8 6 6"></path>
                                                  <path d="m4 14 6-6 2-3"></path>
                                                  <path d="M2 5h12"></path>
                                                  <path d="M7 2h1"></path>
                                                  <path d="m22 22-5-10-5 10"></path>
                                                  <path d="M14 18h6"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Language</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.visa') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <circle cx="12" cy="12" r="10"></circle>
                                                  <path d="M2 12h20"></path>
                                                  <path
                                                      d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Visa</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.costs') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <rect width="20" height="14" x="2" y="5" rx="2">
                                                  </rect>
                                                  <line x1="2" x2="22" y1="10" y2="10">
                                                  </line>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Costs</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.application') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                  </path>
                                                  <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                  <path d="M10 12h4"></path>
                                                  <path d="M10 16h4"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Application</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.housing') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Housing</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.ausbildung-timeline') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <rect x="3" y="4" width="18" height="18" rx="2"
                                                      ry="2"></rect>
                                                  <line x1="16" y1="2" x2="16" y2="6">
                                                  </line>
                                                  <line x1="8" y1="2" x2="8" y2="6">
                                                  </line>
                                                  <line x1="3" y1="10" x2="21" y2="10">
                                                  </line>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Timeline</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.daily-life') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Daily Life</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.cultural-integration') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                  <circle cx="9" cy="7" r="4"></circle>
                                                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Cultural Integration</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.trainee-rights') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="m18 16 4-4-4-4"></path>
                                                  <path d="m6 8-4 4 4 4"></path>
                                                  <path d="M14.5 4h-5l-2 16h5z"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Trainee Rights</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.change-career') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"></path>
                                                  <path d="M21 3v5h-5"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Switch Your Ausbildung</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.after-ausbildung') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <circle cx="12" cy="12" r="10"></circle>
                                                  <polyline points="12 6 12 12 16 14"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">After Ausbildung</span>
                                      </a>
                                      <a class="flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-[#5D5DE9]/5"
                                          href="{{ route('front.faq') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <circle cx="12" cy="12" r="10"></circle>
                                                  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                  <path d="M12 17h.01"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">FAQ</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="relative">
                              <a class="relative cursor-pointer text-sm font-semibold py-2 rounded-full transition-colors text-foreground/80 hover:text-primary px-3 md:px-6"
                                  href="{{ route('front.contact') }}"><span>Contact</span></a>
                          </div>
                          <div class="block xl:hidden">
                              <button
                                  class="relative cursor-pointer text-sm font-semibold px-3 py-2 rounded-full transition-colors flex items-center text-foreground/80 hover:text-primary hover:bg-muted"
                                  type="button">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-ellipsis-vertical h-4 w-4">
                                      <circle cx="12" cy="12" r="1"></circle>
                                      <circle cx="12" cy="5" r="1"></circle>
                                      <circle cx="12" cy="19" r="1"></circle>
                                  </svg>
                              </button>
                          </div>
                          <a class="flex items-center justify-center gap-2 bg-primary hover:bg-primary/95 px-3 md:px-5 py-2 rounded-full text-sm font-medium transition-colors text-primary-foreground border border-primary/20 ml-2 md:ml-3"
                              href="#"><span>Get Started</span><svg xmlns="http://www.w3.org/2000/svg"
                                  width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                  <path d="M5 12h14"></path>
                                  <path d="m12 5 7 7-7 7"></path>
                              </svg></a>
                          {{-- STARTER VERSION: COMMENTED OUT - Apply For Me (dashboard entry)
                          <a class="flex items-center justify-center gap-2 px-3 md:px-5 py-2 rounded-full text-sm font-medium transition-colors bg-[#5D5DE9] hover:bg-[#2C3340] text-white ml-1 md:ml-2"
                              href="{{ route('front.consultation') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"
                                  class="lucide lucide-sparkles w-4 h-4">
                                  <path
                                      d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                  </path>
                                  <path d="M20 3v4"></path>
                                  <path d="M22 5h-4"></path>
                                  <path d="M4 17v2"></path>
                                  <path d="M5 18H3"></path>
                              </svg>
                              <span>Apply For Me</span>
                          </a>
                          --}}
                      </div>
                  </div>
              </div>
              <!-- Mobile spacer -->
              <div class="w-full block sm:hidden transition-all duration-300 h-[96px]"></div>
              <!-- Mobile Nav Bar -->
              <div class="fixed left-0 right-0 z-50 sm:hidden transition-all duration-300 top-0">
                  <div class="flex w-full justify-center px-4 pt-3 pb-1">
                      <div
                          class="relative flex w-full items-center rounded-full border border-border bg-background/80 px-2 py-1.5 shadow-lg backdrop-blur-lg max-w-[380px] justify-between">
                          <button id="mobile-menu-toggle"
                              class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold duration-200 h-10 w-10 rounded-full bg-transparent text-foreground transition hover:bg-muted flex-shrink-0"
                              aria-label="Toggle navigation menu">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu h-5 w-5">
                                  <line x1="4" x2="20" y1="12" y2="12"></line>
                                  <line x1="4" x2="20" y1="6" y2="6"></line>
                                  <line x1="4" x2="20" y1="18" y2="18"></line>
                              </svg>
                          </button>
                          <div class="flex items-center justify-center flex-1">
                              <a class="inline-flex items-center select-none gap-[2px] drop-shadow-[0_4px_12px_rgba(0,0,0,0.15)]"
                                  href="{{ route('front.index') }}">
                                  <img alt="Azubi logo" loading="eager" width="56" height="56"
                                      class="object-contain flex-shrink-0 mt-[2px] h-10 w-10"
                                      src="{{ asset('assets/images/logo/logo-mark-160.png') }}"
                                      style="color: transparent;">
                                  <span class="font-bold text-[#2C3340] text-lg"
                                      style="letter-spacing: -0.02em;">Azubi</span>
                              </a>
                          </div>
                          <div class="flex h-10 w-10 items-center justify-center flex-shrink-0"></div>
                      </div>
                  </div>
              </div>
              <!-- Mobile Menu Overlay -->
              <div id="mobile-menu-overlay" class="fixed inset-0 z-[60] bg-black/25"
                  style="display:none; opacity: 0; transition: opacity 0.3s;">
                  <div class="fixed left-0 right-0 z-[70] flex justify-center px-4" style="top: 88px;">
                      <div
                          class="mobile-panel-scrollbar w-full max-w-[380px] max-h-[calc(100vh-120px)] overflow-y-auto rounded-3xl border border-[#EEF0F4] bg-white/95 p-3 shadow-[0_28px_60px_-24px_rgba(93,93,233,0.3)] backdrop-blur-2xl">
                          <button id="mobile-menu-close"
                              class="absolute top-3 right-6 p-2 rounded-full hover:bg-[#EEF0F4]/50 transition-colors"
                              aria-label="Close menu" style="display:none;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M18 6 6 18"></path>
                                  <path d="m6 6 12 12"></path>
                              </svg>
                          </button>
                          <nav class="flex flex-col gap-1.5">
                              <a class="azubi-mobile-menu-link group relative flex items-center gap-2.5 rounded-2xl px-4 py-2.5 text-[15px] font-semibold transition-all duration-200 hover:-translate-y-[1px] hover:shadow-[0_18px_30px_-22px_rgba(93,93,233,0.3)] bg-[#5D5DE9]/10 text-[#5D5DE9] shadow-[0_18px_40px_-22px_rgba(93,93,233,0.4)]"
                                  href="{{ route('front.index') }}">
                                  <div class="flex h-8 w-8 items-center justify-center rounded-full shrink-0"
                                      style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"
                                          class="lucide lucide-house h-4 w-4">
                                          <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                          <path
                                              d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                          </path>
                                      </svg>
                                  </div>
                                  <span class="flex-1 text-left">Home</span>
                              </a>
                              <a class="azubi-mobile-menu-link group relative flex items-center gap-2.5 rounded-2xl px-4 py-2.5 text-[15px] font-semibold transition-all duration-200 text-[#2C3340] hover:-translate-y-[1px] hover:shadow-[0_18px_30px_-22px_rgba(93,93,233,0.3)] bg-white/80 hover:bg-[#EEF0F4]/50"
                                  href="{{ route('front.jobs') }}">
                                  <div class="flex h-8 w-8 items-center justify-center rounded-full shrink-0"
                                      style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"
                                          class="lucide lucide-search h-4 w-4">
                                          <circle cx="11" cy="11" r="8"></circle>
                                          <path d="m21 21-4.3-4.3"></path>
                                      </svg>
                                  </div>
                                  <span class="flex-1 text-left">Jobs</span>
                              </a>
                              {{-- Mobile Tools accordion commented out for now
                              <div class="azubi-mobile-accordion">
                                  <button
                                      class="azubi-mobile-accordion-trigger group relative flex items-center gap-2.5 rounded-2xl px-4 py-2.5 text-[15px] font-semibold transition-all duration-200 text-[#2C3340] hover:-translate-y-[1px] hover:shadow-[0_18px_30px_-22px_rgba(93,93,233,0.3)] bg-white/80 hover:bg-[#EEF0F4]/50 w-full text-left">
                                      <div class="flex items-center gap-3">
                                          <div class="flex h-8 w-8 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="lucide lucide-wrench h-4 w-4">
                                                  <path
                                                      d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span>Tools</span>
                                      </div>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"
                                          class="lucide lucide-chevron-right ml-1 h-4 w-4 transition-transform duration-200">
                                          <path d="m9 18 6-6-6-6"></path>
                                      </svg>
                                  </button>
                                  <div class="azubi-mobile-accordion-content mt-2 flex-col gap-1 rounded-2xl bg-[#EEF0F4]/30 p-2 shadow-inner max-h-[340px] overflow-y-auto"
                                      style="display:none;">
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.tools.eligibility-checker') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M21 10.5V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12.5">
                                                  </path>
                                                  <path d="m9 11 3 3L22 4"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Eligibility Checker</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.tools.living-cost-calculator') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <rect width="16" height="20" x="4" y="2" rx="2">
                                                  </rect>
                                                  <line x1="8" x2="16" y1="6" y2="6">
                                                  </line>
                                                  <line x1="16" x2="16" y1="14" y2="18">
                                                  </line>
                                                  <path d="M16 10h.01"></path>
                                                  <path d="M12 10h.01"></path>
                                                  <path d="M8 10h.01"></path>
                                                  <path d="M12 14h.01"></path>
                                                  <path d="M8 14h.01"></path>
                                                  <path d="M12 18h.01"></path>
                                                  <path d="M8 18h.01"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Living Cost Calculator</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.tools.roi-calculator') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                  <polyline points="16 7 22 7 22 13"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">ROI Calculator</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.tools.document-checklist') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <rect width="8" height="4" x="8" y="2" rx="1"
                                                      ry="1"></rect>
                                                  <path
                                                      d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                  </path>
                                                  <path d="M12 11h4"></path>
                                                  <path d="M12 16h4"></path>
                                                  <path d="M8 11h.01"></path>
                                                  <path d="M8 16h.01"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Document Checklist</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.tools.career-pathway-decision') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <circle cx="6" cy="19" r="3"></circle>
                                                  <path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"></path>
                                                  <circle cx="18" cy="5" r="3"></circle>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Career Pathway</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.tools.cover-letter') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                  </path>
                                                  <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                  <path d="M10 9H8"></path>
                                                  <path d="M16 13H8"></path>
                                                  <path d="M16 17H8"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Cover Letter Generator</span>
                                      </a>
                                  </div>
                              </div>
                              --}}
                              <div class="azubi-mobile-accordion">
                                  <button
                                      class="azubi-mobile-accordion-trigger group relative flex items-center gap-2.5 rounded-2xl px-4 py-2.5 text-[15px] font-semibold transition-all duration-200 text-[#2C3340] hover:-translate-y-[1px] hover:shadow-[0_18px_30px_-22px_rgba(93,93,233,0.3)] bg-white/80 hover:bg-[#EEF0F4]/50 w-full text-left">
                                      <div class="flex items-center gap-3">
                                          <div class="flex h-8 w-8 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="lucide lucide-briefcase h-4 w-4">
                                                  <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                  <rect width="20" height="14" x="2" y="6" rx="2">
                                                  </rect>
                                              </svg>
                                          </div>
                                          <span>Sectors</span>
                                      </div>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"
                                          class="lucide lucide-chevron-right ml-1 h-4 w-4 transition-transform duration-200">
                                          <path d="m9 18 6-6-6-6"></path>
                                      </svg>
                                  </button>
                                  <div class="azubi-mobile-accordion-content mt-2 flex-col gap-1 rounded-2xl bg-[#EEF0F4]/30 p-2 shadow-inner max-h-[340px] overflow-y-auto"
                                      style="display:none;">
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.sector', ['slug' => 'healthcare']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Healthcare &amp; Nursing</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.sector', ['slug' => 'it']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <polyline points="16 18 22 12 16 6"></polyline>
                                                  <polyline points="8 6 2 12 8 18"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">IT &amp; Software</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.sector', ['slug' => 'engineering']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Engineering &amp; Technical</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.sector', ['slug' => 'automotive']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path
                                                      d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2">
                                                  </path>
                                                  <circle cx="7" cy="17" r="2"></circle>
                                                  <path d="M9 17h6"></path>
                                                  <circle cx="17" cy="17" r="2"></circle>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Automotive &amp; Transportation</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.sector', ['slug' => 'hospitality']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M2 20v-8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8"></path>
                                                  <path d="M4 10V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4"></path>
                                                  <path d="M12 4v6"></path>
                                                  <path d="M2 18h20"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Hospitality &amp; Tourism</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.sector', ['slug' => 'construction']) }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="h-4 w-4">
                                                  <path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"></path>
                                                  <path d="M14 6a6 6 0 0 1 6 6v3"></path>
                                                  <path d="M4 15v-3a6 6 0 0 1 6-6"></path>
                                                  <rect x="2" y="15" width="20" height="4" rx="1">
                                                  </rect>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Construction &amp; Trades</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center justify-center gap-2 mt-2 py-2.5 px-4 rounded-full bg-[#5D5DE9] text-white hover:bg-[#2C3340] text-sm font-semibold transition-all duration-200"
                                          href="{{ route('front.sectors') }}">
                                          <span>View All 15 Sectors</span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="h-4 w-4">
                                              <path d="M5 12h14"></path>
                                              <path d="m12 5 7 7-7 7"></path>
                                          </svg>
                                      </a>
                                  </div>
                              </div>
                              <div class="azubi-mobile-accordion">
                                  <button
                                      class="azubi-mobile-accordion-trigger group relative flex items-center gap-2.5 rounded-2xl px-4 py-2.5 text-[15px] font-semibold transition-all duration-200 text-[#2C3340] hover:-translate-y-[1px] hover:shadow-[0_18px_30px_-22px_rgba(93,93,233,0.3)] bg-white/80 hover:bg-[#EEF0F4]/50 w-full text-left">
                                      <div class="flex items-center gap-3">
                                          <div class="flex h-8 w-8 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="lucide lucide-book h-4 w-4">
                                                  <path
                                                      d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span>Learn</span>
                                      </div>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                          class="lucide lucide-chevron-right ml-1 h-4 w-4 transition-transform duration-200">
                                          <path d="m9 18 6-6-6-6"></path>
                                      </svg>
                                  </button>
                                  <div class="azubi-mobile-accordion-content mt-2 flex-col gap-1 rounded-2xl bg-[#EEF0F4]/30 p-2 shadow-inner max-h-[340px] overflow-y-auto"
                                      style="display:none;">
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.ausbildung-germany') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="M12 7v14"></path>
                                                  <path
                                                      d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Ausbildung in Germany</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.ausbildung-basics') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path
                                                      d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                                  </path>
                                                  <path d="M22 10v6"></path>
                                                  <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Ausbildung Basics</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.why-ausbildung') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path
                                                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Why Choose Ausbildung</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.programs') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <circle cx="11" cy="11" r="8"></circle>
                                                  <path d="m21 21-4.3-4.3"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Finding Programs</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.requirements') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                  </path>
                                                  <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Requirements</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.language') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="m5 8 6 6"></path>
                                                  <path d="m4 14 6-6 2-3"></path>
                                                  <path d="M2 5h12"></path>
                                                  <path d="M7 2h1"></path>
                                                  <path d="m22 22-5-10-5 10"></path>
                                                  <path d="M14 18h6"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Language</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.visa') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <circle cx="12" cy="12" r="10"></circle>
                                                  <path d="M2 12h20"></path>
                                                  <path
                                                      d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Visa</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.costs') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <rect width="20" height="14" x="2" y="5" rx="2">
                                                  </rect>
                                                  <line x1="2" x2="22" y1="10"
                                                      y2="10"></line>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Costs</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.application') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                  </path>
                                                  <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                  <path d="M10 12h4"></path>
                                                  <path d="M10 16h4"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Application</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.housing') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Housing</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.ausbildung-timeline') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <rect x="3" y="4" width="18" height="18" rx="2"
                                                      ry="2"></rect>
                                                  <line x1="16" y1="2" x2="16"
                                                      y2="6"></line>
                                                  <line x1="8" y1="2" x2="8"
                                                      y2="6"></line>
                                                  <line x1="3" y1="10" x2="21"
                                                      y2="10"></line>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Timeline</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.daily-life') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path
                                                      d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Daily Life</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.cultural-integration') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                  <circle cx="9" cy="7" r="4"></circle>
                                                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Cultural Integration</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.trainee-rights') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="m18 16 4-4-4-4"></path>
                                                  <path d="m6 8-4 4 4 4"></path>
                                                  <path d="M14.5 4h-5l-2 16h5z"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Trainee Rights</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.change-career') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"></path>
                                                  <path d="M21 3v5h-5"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">Switch Your Ausbildung</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.after-ausbildung') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <circle cx="12" cy="12" r="10"></circle>
                                                  <polyline points="12 6 12 12 16 14"></polyline>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">After Ausbildung</span>
                                      </a>
                                      <a class="azubi-mobile-sub-link flex items-center gap-3 rounded-xl px-3 py-2.5 transition-all duration-200 text-[#2C3340] hover:bg-white"
                                          href="{{ route('front.faq') }}">
                                          <div class="flex h-9 w-9 items-center justify-center rounded-full shrink-0"
                                              style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" class="h-4 w-4">
                                                  <circle cx="12" cy="12" r="10"></circle>
                                                  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                  <path d="M12 17h.01"></path>
                                              </svg>
                                          </div>
                                          <span class="text-sm font-semibold">FAQ</span>
                                      </a>
                                  </div>
                              </div>
                              <a class="azubi-mobile-menu-link group relative flex items-center gap-2.5 rounded-2xl px-4 py-2.5 text-[15px] font-semibold transition-all duration-200 text-[#2C3340] hover:-translate-y-[1px] hover:shadow-[0_18px_30px_-22px_rgba(93,93,233,0.3)] bg-white/80 hover:bg-[#EEF0F4]/50"
                                  href="{{ route('front.contact') }}">
                                  <div class="flex h-8 w-8 items-center justify-center rounded-full shrink-0"
                                      style="background-color:rgba(93,93,233,0.1); border: 1.5px solid #5D5DE9; color: #5D5DE9;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"
                                          class="lucide lucide-mail h-4 w-4">
                                          <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                          <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                      </svg>
                                  </div>
                                  <span class="flex-1 text-left">Contact</span>
                              </a>
                          </nav>
                          <div class="mt-4 rounded-2xl bg-[#EEF0F4]/30 p-2 shadow-inner backdrop-blur-sm">
                              <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-200 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-8 py-3 h-11 w-full rounded-xl bg-primary text-primary-foreground hover:bg-primary/90"
                                  href="#">
                                  <span>Get Started</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-arrow-right ml-2 h-4 w-4">
                                      <path d="M5 12h14"></path>
                                      <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>
