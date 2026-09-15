@extends('frontoffice.layouts.app')

@section('title', 'Contact Us | Get in Touch with Azubi | Azubi')

@section('meta')
    <meta name="description"
        content="Have questions about Ausbildung in Germany? Get in touch with Azubi. We're here to help you navigate your vocational training journey in Germany.">
    <meta name="keywords"
        content="contact Azubi,Ausbildung in Germany,vocational training Germany,German apprenticeship,student advisory for Ausbildung">
    <meta property="og:title" content="Contact Us | Get in Touch with Azubi">
    <meta property="og:description"
        content="Have questions about Ausbildung in Germany? Get in touch with Azubi. We're here to help you navigate your vocational training journey in Germany.">
@endsection

@section('content')
    <!-- ====== HERO ====== -->
    <section class="relative min-h-[70vh] flex items-center overflow-hidden pt-24 pb-12 bg-background">
        <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <div class="space-y-6 text-center lg:text-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full"
                        style="background-color:rgba(93,93,233,0.1);border:1px solid rgba(93,93,233,0.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-4 h-4 text-primary">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        <span class="text-sm font-medium text-secondary">Get in Touch</span>
                    </div>
                    <!-- Heading -->
                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary leading-tight tracking-tight">
                            Let's Build Your<br><span class="text-primary">German Future</span><br>Together
                        </h1>
                        <p class="text-lg md:text-xl text-muted-foreground max-w-xl mx-auto lg:mx-0 leading-relaxed">
                            Whether you're exploring vocational training opportunities or ready to apply, our
                            team is here to guide your journey every step of the way.
                        </p>
                    </div>
                    <!-- Feature items -->
                    <div class="grid gap-4 max-w-lg mx-auto lg:mx-0">
                        <div class="flex items-start gap-3 lg:justify-start">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0"
                                style="background-color:rgba(93,93,233,0.1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-primary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div class="flex-1 text-left">
                                <span class="block text-base font-semibold text-secondary">Fast Response
                                    Time</span>
                                <span class="text-sm text-muted-foreground">Usually within 24 hours</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 lg:justify-start">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0"
                                style="background-color:rgba(44,51,64,0.1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-secondary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                    <path d="M2 12h20"></path>
                                </svg>
                            </div>
                            <div class="flex-1 text-left">
                                <span class="block text-base font-semibold text-secondary">Multilingual
                                    Support</span>
                                <span class="text-sm text-muted-foreground">Available in English, Hindi, and
                                    German</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 lg:justify-start">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0"
                                style="background-color:rgba(93,93,233,0.1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-primary">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1 text-left">
                                <span class="block text-base font-semibold text-secondary">Direct
                                    Email</span>
                                <span class="text-sm text-muted-foreground">hello@azubi.ma</span>
                            </div>
                        </div>
                    </div>
                    <!-- CTA -->
                    <div class="flex justify-center lg:justify-start">
                        <a href="#azubi-contact-form-section"
                            class="inline-flex items-center justify-center gap-2 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 rounded-full px-8 text-base font-semibold transition-all duration-200"
                            style="background-color:#5D5DE9;color:white;min-height:48px;">
                            Send Us a Message
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="ml-2 w-5 h-5">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Mascot image placeholder -->
                <div class="hidden lg:flex relative justify-center items-center min-h-[500px]">
                    <div class="relative w-full max-w-lg">
                        <img alt="Azubi mascot welcoming you" width="600" height="600" class="w-full h-auto"
                            src="{{ asset('assets/_next/mascot_welcominge50a.jpeg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CONTACT INFO CARDS + LOCATIONS ====== -->
    <section class="py-12 bg-muted">
        <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
            <!-- Info Cards -->
            <div class="grid md:grid-cols-3 gap-6 mb-16">
                <!-- Email -->
                <div>
                    <div
                        class="text-card-foreground h-full bg-card border-0 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-200 rounded-2xl">
                        <div class="p-6">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4"
                                style="background-color:rgba(93,93,233,0.1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg text-secondary mb-2">Email Us</h3>
                            <p class="text-sm text-muted-foreground mb-4">Drop us a line anytime</p>
                            <a href="mailto:hello@azubi.ma"
                                class="text-primary font-medium hover:text-orange-hover transition-colors inline-flex items-center gap-2 group text-sm">
                                hello@azubi.ma
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="w-4 h-4 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- WhatsApp -->
                <div>
                    <div
                        class="text-card-foreground h-full bg-card border-0 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-200 rounded-2xl">
                        <div class="p-6">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4"
                                style="background-color:rgba(93,93,233,0.1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg text-secondary mb-2">WhatsApp</h3>
                            <p class="text-sm text-muted-foreground mb-4">Chat with us directly</p>
                            <a href="https://wa.me/212600000000" target="_blank" rel="noopener noreferrer"
                                class="text-primary font-medium hover:text-orange-hover transition-colors inline-flex items-center gap-2 group text-sm">
                                Start Chat
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="w-4 h-4 group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Office Hours -->
                <div>
                    <div
                        class="text-card-foreground h-full bg-card border-0 shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-200 rounded-2xl">
                        <div class="p-6">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4"
                                style="background-color:rgba(93,93,233,0.1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg text-secondary mb-2">Office Hours</h3>
                            <div class="space-y-1 text-sm text-muted-foreground">
                                <p>Mon-Fri: 9:00 - 18:00</p>
                                <p>Saturday: 10:00 - 15:00</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Locations Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4 tracking-tight">Our Locations
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">We're proud to serve students
                    globally with offices in Marrakech and Rabat.</p>
            </div>

            <!-- Location Cards -->
            <div class="grid md:grid-cols-2 gap-8 relative">
                <!-- Marrakech Office -->
                <div>
                    <div class="text-card-foreground h-full bg-card border-0 shadow-md rounded-2xl overflow-hidden">
                        <div class="p-0">
                            <div class="p-4" style="background-color:rgba(93,93,233,0.1)">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-primary">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <h3 class="font-semibold text-lg text-secondary">Marrakech Office</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <p class="text-sm text-muted-foreground leading-relaxed">
                                    Marrakech<br>Morocco
                                </p>
                                <div class="pt-4 border-t space-y-2">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-primary">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                        <a href="mailto:hello@azubi.ma"
                                            class="text-sm text-primary hover:underline">hello@azubi.ma</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Rabat Office -->
                <div>
                    <div class="text-card-foreground h-full bg-card border-0 shadow-md rounded-2xl overflow-hidden">
                        <div class="p-0">
                            <div class="p-4" style="background-color:rgba(93,93,233,0.1)">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-primary">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <h3 class="font-semibold text-lg text-secondary">Rabat Office</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <p class="text-sm text-muted-foreground leading-relaxed">
                                    Rabat<br>Morocco
                                </p>
                                <div class="pt-4 border-t space-y-2">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-primary">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                        <a href="mailto:hello@azubi.ma"
                                            class="text-sm text-primary hover:underline">hello@azubi.ma</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CONTACT FORM ====== -->
    <section id="azubi-contact-form-section" class="bg-card py-12">
        <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl py-12">
            <div class="grid lg:grid-cols-[1fr_0.4fr] gap-8 items-start max-w-5xl mx-auto">
                <div class="text-card-foreground overflow-hidden bg-card shadow-md border-0 rounded-2xl">
                    <div class="p-0">
                        <form class="space-y-5 p-6 sm:p-8">
                            <div class="space-y-1 mb-4">
                                <h2 class="text-2xl font-bold text-secondary">Get in Touch</h2>
                                <p class="text-muted-foreground">Fill out the form below and we'll get back
                                    to you as soon as possible.</p>
                            </div>
                            <!-- Name -->
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium leading-none" for="firstName">First
                                        Name</label>
                                    <input
                                        class="flex h-10 w-full border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring rounded-lg"
                                        id="firstName" name="firstName">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium leading-none" for="lastName">Last
                                        Name</label>
                                    <input
                                        class="flex h-10 w-full border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring rounded-lg"
                                        id="lastName" name="lastName">
                                </div>
                            </div>
                            <!-- Email + Phone -->
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium leading-none" for="email">Email</label>
                                    <input type="email"
                                        class="flex h-10 w-full border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring rounded-lg"
                                        id="email" name="email">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium leading-none" for="phone">Phone
                                        Number</label>
                                    <div class="flex relative">
                                        <div
                                            class="flex h-12 w-full rounded-lg border border-input bg-white text-sm transition-all duration-200 focus-within:ring-2 focus-within:ring-primary focus-within:border-primary">
                                            <button type="button"
                                                class="flex h-full items-center gap-1 rounded-l-lg border-0 bg-transparent px-3 py-2 text-sm font-medium">
                                                <span class="flex items-center gap-1">
                                                    <span class="text-base">&#127474;&#127462;</span>
                                                    <span>+212</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="h-4 w-4 opacity-50">
                                                        <path d="m6 9 6 6 6-6"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="h-full w-px azubi-bg-beige"></div>
                                            <input type="tel" placeholder="Phone number" autocomplete="tel"
                                                class="flex-1 border-0 bg-transparent px-3 py-2 text-sm outline-none placeholder:text-muted-foreground">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Subject -->
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="subject">Subject</label>
                                <select id="subject"
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                                    <option value="" disabled selected>Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="ausbildung">Ausbildung Programs</option>
                                    <option value="application">Application Support</option>
                                    <option value="visa">Visa & Documentation</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <!-- Message -->
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="message">Message</label>
                                <textarea
                                    class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring"
                                    id="message" rows="4" name="message"></textarea>
                            </div>
                            <!-- Honeypot -->
                            <div class="hidden" aria-hidden="true">
                                <label class="text-sm font-medium leading-none" for="website">Website</label>
                                <input type="text" id="website" tabindex="-1" autocomplete="off" name="website"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm">
                            </div>
                            <!-- Submit -->
                            <button
                                class="inline-flex items-center justify-center gap-2 text-sm font-semibold transition-all duration-200 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 w-full rounded-full"
                                type="submit" style="background-color:#5D5DE9;color:white;min-height:48px;">
                                Send Message
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </button>
                            <p class="text-xs text-muted-foreground text-center mt-3">
                                By submitting this form, you agree to our privacy policy. We'll never share
                                your information without your permission.
                            </p>
                        </form>
                    </div>
                </div>
                <!-- Mascot sidebar -->
                <div class="hidden lg:flex flex-col items-center space-y-4">
                    <img src="{{ asset('assets/_next/mascot_studying_malec9f9.jpeg') }}"
                        alt="Azubi mascot encouraging you" class="w-full max-w-[280px] h-auto">
                    <div class="text-center max-w-[240px]">
                        <p class="text-sm text-muted-foreground italic">"We're here to help you succeed!
                            Fill out the form and let's start your journey."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== FAQ ====== -->
    <section class="py-12 bg-background">
        <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4 tracking-tight">Frequently
                    Asked Questions</h2>
                <p class="text-lg text-muted-foreground max-w-3xl mx-auto">Find answers to common questions
                    about Ausbildung in Germany. If you can't find what you're looking for, don't hesitate
                    to contact us.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-5 md:gap-6">
                <!-- FAQ 1 -->
                <div class="flex flex-col">
                    <div
                        class="border rounded-xl overflow-hidden bg-card shadow-sm hover:shadow-md transition-shadow azubi-faq-item-tw">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left font-medium transition-all azubi-faq-btn-tw"
                            aria-expanded="false">
                            <span class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="h-5 w-5 text-primary mr-3 mt-0.5 shrink-0">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                                <span class="text-secondary">How do I start the Ausbildung application
                                    process?</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5 text-muted-foreground transition-transform duration-200 azubi-faq-chev-tw">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content-tw" style="display:none;">
                            <div class="px-5 pb-5 text-sm text-muted-foreground leading-relaxed">
                                Getting started is easy! Create a free account on Azubi, complete your
                                profile, and use our AI-powered tools to find matching Ausbildung positions.
                                Our team will guide you through the entire process from application to visa.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="flex flex-col">
                    <div
                        class="border rounded-xl overflow-hidden bg-card shadow-sm hover:shadow-md transition-shadow azubi-faq-item-tw">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left font-medium transition-all azubi-faq-btn-tw"
                            aria-expanded="false">
                            <span class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="h-5 w-5 text-primary mr-3 mt-0.5 shrink-0">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                                <span class="text-secondary">What are the costs involved in pursuing
                                    Ausbildung in Germany?</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5 text-muted-foreground transition-transform duration-200 azubi-faq-chev-tw">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content-tw" style="display:none;">
                            <div class="px-5 pb-5 text-sm text-muted-foreground leading-relaxed">
                                Creating an account and browsing jobs is completely free. We offer different
                                service packages for application support, document preparation, and visa
                                assistance. Contact us for detailed pricing information tailored to your
                                needs.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="flex flex-col">
                    <div
                        class="border rounded-xl overflow-hidden bg-card shadow-sm hover:shadow-md transition-shadow azubi-faq-item-tw">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left font-medium transition-all azubi-faq-btn-tw"
                            aria-expanded="false">
                            <span class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="h-5 w-5 text-primary mr-3 mt-0.5 shrink-0">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                                <span class="text-secondary">Do I need to know German before
                                    applying?</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5 text-muted-foreground transition-transform duration-200 azubi-faq-chev-tw">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content-tw" style="display:none;">
                            <div class="px-5 pb-5 text-sm text-muted-foreground leading-relaxed">
                                Most Ausbildung programs require at least B1 level German. However, some
                                programs in certain sectors accept B2 English with a commitment to learn
                                German. We can help you assess your language needs and find suitable
                                programs.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="flex flex-col">
                    <div
                        class="border rounded-xl overflow-hidden bg-card shadow-sm hover:shadow-md transition-shadow azubi-faq-item-tw">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left font-medium transition-all azubi-faq-btn-tw"
                            aria-expanded="false">
                            <span class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="h-5 w-5 text-primary mr-3 mt-0.5 shrink-0">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                                <span class="text-secondary">How long is the typical Ausbildung
                                    program?</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5 text-muted-foreground transition-transform duration-200 azubi-faq-chev-tw">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content-tw" style="display:none;">
                            <div class="px-5 pb-5 text-sm text-muted-foreground leading-relaxed">
                                Ausbildung programs typically last between 2 to 3.5 years, depending on the
                                profession and sector. During this time, you'll combine practical on-the-job
                                training with theoretical education at a vocational school (Berufsschule).
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ 5 -->
                <div class="flex flex-col">
                    <div
                        class="border rounded-xl overflow-hidden bg-card shadow-sm hover:shadow-md transition-shadow azubi-faq-item-tw">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left font-medium transition-all azubi-faq-btn-tw"
                            aria-expanded="false">
                            <span class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="h-5 w-5 text-primary mr-3 mt-0.5 shrink-0">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                                <span class="text-secondary">Can I work while pursuing Ausbildung?</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5 text-muted-foreground transition-transform duration-200 azubi-faq-chev-tw">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content-tw" style="display:none;">
                            <div class="px-5 pb-5 text-sm text-muted-foreground leading-relaxed">
                                Yes! Ausbildung is a dual education system, meaning you work and learn
                                simultaneously. You'll spend part of your week at a company gaining practical
                                experience and receive a monthly training salary throughout the program.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ 6 -->
                <div class="flex flex-col">
                    <div
                        class="border rounded-xl overflow-hidden bg-card shadow-sm hover:shadow-md transition-shadow azubi-faq-item-tw">
                        <button
                            class="w-full flex items-center justify-between p-5 text-left font-medium transition-all azubi-faq-btn-tw"
                            aria-expanded="false">
                            <span class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="h-5 w-5 text-primary mr-3 mt-0.5 shrink-0">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                                <span class="text-secondary">What happens after completing
                                    Ausbildung?</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5 text-muted-foreground transition-transform duration-200 azubi-faq-chev-tw">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div class="azubi-faq-content-tw" style="display:none;">
                            <div class="px-5 pb-5 text-sm text-muted-foreground leading-relaxed">
                                After completing your Ausbildung, you'll receive a recognized German
                                qualification. Many companies offer permanent positions to their graduates.
                                You can also pursue further education or apply for a work permit extension.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQ CTA -->
            <div class="mt-12 text-center">
                <p class="text-muted-foreground mb-6">Still have questions? We're here to help you navigate
                    every step of your journey.</p>
                <div class="inline-flex items-center justify-center px-6 py-3 rounded-full text-primary font-medium"
                    style="background-color:rgba(93,93,233,0.1)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="h-5 w-5 mr-2">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                    Email us at <a href="mailto:hello@azubi.ma"
                        class="hover:underline font-semibold ml-1">hello@azubi.ma</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CTA ====== -->
    <div class="container mx-auto px-4 lg:px-6 my-16">
        <section class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg">
            <img alt="Background" loading="lazy" decoding="async" class="object-cover object-center rounded-2xl"
                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent;"
                src="{{ asset('assets/_next/arbeitgeber-hero-backgroundaa3f.jpeg') }}">
            <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl"></div>
            <div class="absolute inset-0 z-[1] rounded-2xl"
                style="background:radial-gradient(ellipse at center,transparent 0%,transparent 40%,rgba(0,0,0,0.4) 100%),linear-gradient(to top,rgba(0,0,0,0.5) 0%,transparent 30%),linear-gradient(to right,rgba(0,0,0,0.3) 0%,transparent 15%),linear-gradient(to left,rgba(0,0,0,0.3) 0%,transparent 15%);">
            </div>
            <div
                class="relative z-10 mx-auto flex max-w-container gap-8 px-6 sm:gap-10 md:px-12 flex-col items-center text-center">
                <div class="flex flex-col gap-8 items-center text-center">
                    <h2 class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center">
                        Explore Live Ausbildung Positions</h2>
                    <p class="text-base text-white/90 leading-relaxed max-w-2xl text-center">Don't wait -
                        browse hundreds of verified job openings from German employers. Find your perfect
                        match and apply today.</p>
                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="#"
                            class="inline-flex items-center justify-center gap-2 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Browse
                            Jobs</a>
                        <a href="#"
                            class="inline-flex items-center justify-center gap-2 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F7F8FA] hover:text-[#2C3340] hover:border-[#2C3340]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300">Book
                            Consultation</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/contact-faq.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endpush
