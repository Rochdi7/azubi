<section class="py-12 md:py-16 bg-[#F7F8FA]">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="rounded-[24px] border-2 border-[#5D5DE9]/30 bg-white p-6 md:p-8 shadow-lg">
            <div class="grid gap-8 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-6 space-y-4">
                    <span
                        class="inline-flex items-center rounded-full border border-[#5D5DE9] bg-[#5D5DE9]/10 px-3 py-1 text-xs font-bold text-[#5D5DE9]">
                        EXCLUSIVE INSIGHTS
                    </span>
                    <h3 class="text-2xl font-bold leading-tight text-[#2C3340] md:text-3xl">
                        Get Your Exclusive Analysis
                    </h3>
                    <p class="max-w-xl text-sm leading-relaxed text-[#2C3340]/80 md:text-base">
                        Receive a personalized Ausbildung opportunity snapshot based on your profile and next steps.
                    </p>
                    <div class="flex items-center gap-4 text-xs text-[#2C3340]/70">
                        <span class="inline-flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                            </svg>
                            Secure
                        </span>
                        <span class="inline-flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                            </svg>
                            Instant
                        </span>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <form action="{{ route('front.consultation') }}" method="get" class="space-y-3">
                        <div class="grid gap-3 sm:grid-cols-2">
                            <input name="first_name"
                                class="h-10 w-full rounded-[12px] border-2 border-[#2C3340]/20 bg-white px-3 text-sm text-[#2C3340] focus:border-[#5D5DE9] focus:outline-none"
                                placeholder="First Name *" azubi-required />
                            <input name="last_name"
                                class="h-10 w-full rounded-[12px] border-2 border-[#2C3340]/20 bg-white px-3 text-sm text-[#2C3340] focus:border-[#5D5DE9] focus:outline-none"
                                placeholder="Last Name *" azubi-required />
                        </div>
                        <input type="email" name="email"
                            class="h-10 w-full rounded-[12px] border-2 border-[#2C3340]/20 bg-white px-3 text-sm text-[#2C3340] focus:border-[#5D5DE9] focus:outline-none"
                            placeholder="Your Email Address *" azubi-required />
                        <div class="grid gap-3 sm:grid-cols-3">
                            <select name="german_level"
                                class="h-10 w-full rounded-[12px] border-2 border-[#2C3340]/20 bg-white px-3 text-sm text-[#2C3340] focus:border-[#5D5DE9] focus:outline-none"
                                azubi-required>
                                <option value="">German Level *</option>
                                <option value="a1">A1</option>
                                <option value="a2">A2</option>
                                <option value="b1">B1</option>
                                <option value="b2">B2</option>
                                <option value="c1">C1+</option>
                            </select>
                            <select name="field"
                                class="h-10 w-full rounded-[12px] border-2 border-[#2C3340]/20 bg-white px-3 text-sm text-[#2C3340] focus:border-[#5D5DE9] focus:outline-none"
                                azubi-required>
                                <option value="">Field *</option>
                                <option value="it">IT</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="engineering">Engineering</option>
                                <option value="logistics">Logistics</option>
                            </select>
                            <input name="country"
                                class="h-10 w-full rounded-[12px] border-2 border-[#2C3340]/20 bg-white px-3 text-sm text-[#2C3340] focus:border-[#5D5DE9] focus:outline-none"
                                placeholder="Country *" azubi-required />
                        </div>
                        <button type="submit"
                            class="inline-flex h-10 w-full items-center justify-center gap-2 rounded-full bg-[#5D5DE9] px-6 text-sm font-bold text-white transition-colors hover:bg-[#2C3340]">
                            GET EXCLUSIVE INSIGHTS NOW
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
