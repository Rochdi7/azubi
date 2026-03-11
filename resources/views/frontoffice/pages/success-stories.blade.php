@extends('frontoffice.layouts.app')

@section('title', 'Success Stories - GoAusbildung | GoAusbildung')

@section('meta')
    <meta name="description" content="Meet our students who turned their dreams into reality. From application to successful Ausbildung placements in Germany." />
    <meta property="og:title" content="Success Stories - GoAusbildung" />
    <meta property="og:description" content="Meet our students who turned their dreams into reality. From application to successful Ausbildung placements in Germany." />
    <meta property="og:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Success Stories - GoAusbildung" />
    <meta name="twitter:description" content="Meet our students who turned their dreams into reality. From application to successful Ausbildung placements in Germany." />
    <meta name="twitter:image" content="https://images.goausbildung.com/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/success-stories') }}" />
@endsection

@section('content')
<main>
          <section class="relative min-h-[30vh] w-full overflow-visible">
            <div
              class="container relative z-10 mx-auto flex min-h-[30vh] flex-col items-center justify-center gap-6 px-4 pb-6 pt-8 text-center lg:px-6"
            >
              <div
                class="relative w-32 h-32 sm:w-40 sm:h-40 mx-auto animate-appear"
              >
                <img
                  alt="Young Oak mascot - Celebrating student success stories"
                  decoding="async"
                  data-nimg="fill"
                  class="object-contain drop-shadow-2xl"
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
                  sizes="100vw"
                  src="{{ asset('assets/_next/mascot_celebrating_femaledd5e.jpeg') }}"
                />
              </div>
              <div class="flex flex-col items-center gap-2">
                <h1
                  class="tracking-tight font-bold text-3xl sm:text-4xl md:text-5xl text-secondary animate-appear opacity-75"
                >
                  Student Success
                </h1>
                <h2
                  class="tracking-tight font-bold text-2xl sm:text-3xl text-primary animate-appear [animation-delay:150ms]"
                >
                  Stories
                </h2>
              </div>
              <p
                class="text-lg leading-relaxed mx-auto max-w-[550px] font-medium animate-appear opacity-0 [animation-delay:300ms]"
              >
                Meet our students who turned their dreams into reality. From
                acceptance letters to new beginnings in Germany.
              </p>
            </div>
          </section>
          <section class="py-12">
            <div class="container px-4 md:px-6">
              <div class="space-y-10">
                <div
                  class="group relative w-full max-w-2xl mx-auto transition-all duration-300"
                >
                  <div class="relative flex items-center">
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
                      class="lucide lucide-search absolute left-4 h-4 w-4 text-muted-foreground"
                    >
                      <circle cx="11" cy="11" r="8"></circle>
                      <path d="m21 21-4.3-4.3"></path></svg
                    ><input
                      type="search"
                      placeholder="Search by name, university, course or intake..."
                      class="w-full py-3 pl-11 pr-4 bg-background border border-border rounded-full text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-300"
                      value=""
                    />
                  </div>
                </div>
                <div class="relative space-y-8">
                  <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"
                  >
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Geevarghese&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/VpPnmWGMXiFYS8GvznecpZnq-mcSgYwoDqc3Ljp74-Qb07d.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Geevarghese
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Deggendorf Institute of Technology (TH Deggendorf)
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          High Performance Computing / Quantum Computing
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DTAioS5j87b/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Daneshwaran&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/FYSofF1jcG6iwDNRhCb7Nl61N8lvSHl7rcdOlFhWY2gd649.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Daneshwaran
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Deggendorf Institute of Technology (TH Deggendorf)
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Mechatronic and Cyber - Physical Systems
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DTAioS5j87b/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Vamshi&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/UAwbjRc-lZoWwur4NAzUSLcP6lqa5N99o-uZQMcv_mY6356.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Vamshi
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Deggendorf Institute of Technology (TH Deggendorf)
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Artificial Intelligence for Smart Sensors and
                          Actuators
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DTAioS5j87b/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Deepthi&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/BQQqDJSWJC0s9H3exCdLFED1EBCDza5bzccuZlmfDcQ03f8.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Deepthi
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          RPTU Kaiserslautern
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Landau - Computer Science
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DS1lpytD1kV/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Srinidhi&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/8IBXcPyh5jk-DvpV4U-Ez0zKcSHT5yi-IBY-KgkT_Ckbf2f.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Srinidhi
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Anhalt University of Applied Sciences (Hochschule
                          Anhalt)
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Molecular Biotechnology (MSc)
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DS1d-LaD-5K/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Trishul&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/lhCMLs30hJRLqmREBHZejlsZg0FOUxF4a2uZTAA3dmEd119.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Trishul
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Furtwangen University (HS Furtwangen)
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Business Consulting Master (BCM)
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DSSMfFpj4TE/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Thushar&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/0BcTVfdEIoHDaZfIQEM4igUceF4KG5dc26MjPbxDeHQ6533.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Thushar
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          University of Rostock
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Sustainable Maritime Engineering
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DQrWiBPj4Gv/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Divili&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/YwqsAsXp-dyvzFm_yMzjcLC8YtvS31EcSzig1zMggW0950f.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Divili
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          University of Erlangen
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Nuremberg (FAU Erlangen - Nuremberg) - MSc
                          Electromobility - ACES
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DQ4LPcZDxBE/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Nandhagopal&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/fdZ3En8UhvgWDART-7MU8STZ8abVTRa-qK80X8SFflkce87.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Nandhagopal
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          University of Rostock
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Sustainable Maritime Engineering
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DRPSbc2D3iQ/?utm_source=ig_web_copy_link"
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Reminiscere&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/cC82zE2OJQoP-wrd_klRtwfgDKMMSgtjmiOLQFnVpS8547b.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Reminiscere
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Osnabruck University
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Economics
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DRXJG-7j9qA/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Pavin&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/-xEqDwnCVHNOrfXUoUuRrWcHByFu44fSeYNKG6GeP6I8cfe.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Pavin
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Deggendorf Institute of Technology (TH Deggendorf)
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          AUtomotive Software Engineering
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DRhoVKOjcmP/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="text-card-foreground relative overflow-hidden rounded-2xl text-center shadow-lg border border-border bg-background hover:shadow-xl hover:scale-[1.015] transition-all duration-300"
                    >
                      <div
                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 absolute top-4 right-4 z-10 bg-secondary text-background text-xs px-3 py-1 rounded-full shadow"
                      >
                        Summer 2026
                      </div>
                      <div class="flex justify-center pt-8">
                        <div
                          class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shadow-md"
                        >
                          <div
                            class="absolute inset-0 rounded-full bg-primary p-[3px]"
                          >
                            <div
                              class="w-full h-full bg-background rounded-full p-1"
                            >
                              <img
                                alt="Dhinesh&#x27;s profile"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover rounded-full"
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
                                sizes="100vw"
                                src="{{ asset('assets/_next/XlsF2BkC7VT1n8kDKQHUB-XsLLokr9w44bMTi_PnroU90d8.jpeg') }}"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-6 pt-6 pb-6 px-6">
                        <h3
                          class="tracking-tight font-semibold text-secondary text-base sm:text-lg"
                        >
                          Dhinesh
                        </h3>
                        <p class="text-sm leading-relaxed font-medium mt-1">
                          Deggendorf Institute of Technology (TH Deggendorf)
                        </p>
                        <p
                          class="text-sm leading-relaxed text-muted-foreground"
                        >
                          Artificial Intelligence for Smart Sensors and
                          Actuators
                        </p>
                        <div class="mt-4">
                          <a
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://www.instagram.com/p/DRhoVKOjcmP/?utm_source=ig_web_copy_link&amp;igsh=MzRlODBiNWFlZA=="
                            ><button
                              class="whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-sm w-full flex items-center justify-center gap-2 rounded-full"
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
                                class="lucide lucide-instagram h-4 w-4"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                ></path>
                                <line
                                  x1="17.5"
                                  x2="17.51"
                                  y1="6.5"
                                  y2="6.5"
                                ></line></svg
                              >View Story
                            </button></a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-center">
                    <button
                      class="px-6 py-2.5 bg-primary/10 hover:bg-primary/20 text-primary font-medium rounded-full transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary/20"
                    >
                      Load More Stories
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="relative py-12 overflow-hidden bg-[#F9F5F0]">
            <div class="container relative z-10 mx-auto px-4">
              <div class="max-w-7xl mx-auto">
                <div
                  class="relative"
                  style="opacity: 0; transform: translateY(20px)"
                >
                  <div
                    class="text-card-foreground shadow relative bg-[#F4991A] border-2 border-[#F4991A] overflow-hidden rounded-[24px]"
                  >
                    <div class="relative p-4 sm:p-6 lg:p-8">
                      <div class="block lg:hidden space-y-6">
                        <div class="text-center">
                          <div
                            class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold mb-3 rounded-full backdrop-blur-sm"
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
                              class="lucide lucide-gift w-3 h-3 mr-1"
                            >
                              <rect
                                x="3"
                                y="8"
                                width="18"
                                height="4"
                                rx="1"
                              ></rect>
                              <path d="M12 8v13"></path>
                              <path
                                d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"
                              ></path>
                              <path
                                d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"
                              ></path></svg
                            >EXCLUSIVE INSIGHTS
                          </div>
                          <h3
                            class="text-lg sm:text-xl font-bold text-white leading-tight mb-2"
                          >
                            <span class="text-white">REVEALED:</span>
                            <!-- -->How German CEOs Skipped University
                          </h3>
                          <p class="text-sm text-white/90 mb-4 font-medium">
                            847 executive backgrounds from BMW, Siemens &amp;
                            Mercedes-Benz analyzed!
                          </p>
                          <div
                            class="flex items-center justify-center gap-4 text-xs mb-4"
                          >
                            <div class="flex items-center gap-1">
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
                                class="lucide lucide-download w-3 h-3 text-white"
                              >
                                <path
                                  d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                ></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line
                                  x1="12"
                                  x2="12"
                                  y1="15"
                                  y2="3"
                                ></line></svg
                              ><span class="font-bold text-white">4,247</span
                              ><span class="text-white/80">downloaded</span>
                            </div>
                            <div class="flex items-center gap-1">
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
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
                                class="lucide lucide-star w-3 h-3 fill-white text-white"
                              >
                                <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                ></path></svg
                              ><span class="text-white/80">(4.9)</span>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div
                            class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4"
                          >
                            <div class="space-y-2 mb-4">
                              <h4 class="text-base font-bold text-[#344F1F]">
                                Get Your Exclusive Analysis
                              </h4>
                              <div
                                class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full"
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
                                  class="lucide lucide-circle-check-big w-3 h-3 mr-1"
                                >
                                  <path
                                    d="M21.801 10A10 10 0 1 1 17 3.335"
                                  ></path>
                                  <path d="m9 11 3 3L22 4"></path></svg
                                >Free limited time offer
                              </div>
                            </div>
                            <form class="space-y-3">
                              <div
                                class="grid grid-cols-1 sm:grid-cols-2 gap-3"
                              >
                                <input
                                  class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                  placeholder="First Name *"
                                  required=""
                                  value=""
                                /><input
                                  class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                  placeholder="Last Name *"
                                  required=""
                                  value=""
                                />
                              </div>
                              <input
                                type="email"
                                class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                placeholder="Your Email Address *"
                                required=""
                                value=""
                              />
                              <div class="grid grid-cols-1 gap-3">
                                <button
                                  type="button"
                                  role="combobox"
                                  aria-controls="radix-«R2t6cuslb»"
                                  aria-expanded="false"
                                  aria-required="true"
                                  aria-autocomplete="none"
                                  dir="ltr"
                                  data-state="closed"
                                  data-placeholder=""
                                  class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]"
                                >
                                  <span style="pointer-events: none"
                                    >German Level *</span
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
                                  required=""
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
                                >
                                  <option value=""></option></select
                                ><button
                                  type="button"
                                  role="combobox"
                                  aria-controls="radix-«R4t6cuslb»"
                                  aria-expanded="false"
                                  aria-required="true"
                                  aria-autocomplete="none"
                                  dir="ltr"
                                  data-state="closed"
                                  data-placeholder=""
                                  class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]"
                                >
                                  <span style="pointer-events: none"
                                    >Field of Interest *</span
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
                                  required=""
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
                                >
                                  <option value=""></option></select
                                ><button
                                  type="button"
                                  role="combobox"
                                  aria-controls="radix-«R6t6cuslb»"
                                  aria-expanded="false"
                                  aria-required="true"
                                  aria-autocomplete="none"
                                  dir="ltr"
                                  data-state="closed"
                                  data-placeholder=""
                                  class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-10 text-[#344F1F] text-sm rounded-[12px]"
                                >
                                  <span style="pointer-events: none"
                                    >Current Country *</span
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
                                  required=""
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
                                >
                                  <option value=""></option>
                                </select>
                              </div>
                              <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-12 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
                                type="submit"
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
                                  class="lucide lucide-download w-4 h-4 mr-2"
                                >
                                  <path
                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                  ></path>
                                  <polyline
                                    points="7 10 12 15 17 10"
                                  ></polyline>
                                  <line
                                    x1="12"
                                    x2="12"
                                    y1="15"
                                    y2="3"
                                  ></line></svg
                                >GET EXCLUSIVE INSIGHTS NOW<svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="lucide lucide-arrow-right w-4 h-4 ml-2"
                                >
                                  <path d="M5 12h14"></path>
                                  <path d="m12 5 7 7-7 7"></path>
                                </svg>
                              </button>
                              <div
                                class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1"
                              >
                                <div class="flex items-center gap-1">
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
                                    class="lucide lucide-shield w-3 h-3 text-[#344F1F]"
                                  >
                                    <path
                                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"
                                    ></path></svg
                                  ><span>Secure</span>
                                </div>
                                <div class="flex items-center gap-1">
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
                                    class="lucide lucide-zap w-3 h-3 text-[#F4991A]"
                                  >
                                    <path
                                      d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                                    ></path></svg
                                  ><span>Instant</span>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="hidden lg:block">
                        <div class="grid lg:grid-cols-12 gap-6 items-center">
                          <div
                            class="lg:col-span-3 flex justify-center lg:justify-start items-center"
                          >
                            <div class="relative">
                              <img
                                src="mascot/mascot_pointing_male.webp"
                                alt="GoAusbildung Mascot"
                                class="w-56 h-auto object-contain"
                              />
                            </div>
                          </div>
                          <div class="lg:col-span-4 space-y-3">
                            <div
                              class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-white/20 text-white border-white/30 px-3 py-1 text-xs font-bold rounded-full backdrop-blur-sm"
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
                                class="lucide lucide-gift w-3 h-3 mr-1"
                              >
                                <rect
                                  x="3"
                                  y="8"
                                  width="18"
                                  height="4"
                                  rx="1"
                                ></rect>
                                <path d="M12 8v13"></path>
                                <path
                                  d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"
                                ></path>
                                <path
                                  d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"
                                ></path></svg
                              >EXCLUSIVE INSIGHTS
                            </div>
                            <h3
                              class="text-xl lg:text-2xl font-bold text-white leading-tight"
                            >
                              <span class="text-white">REVEALED:</span>
                              <!-- -->How German CEOs Skipped University
                            </h3>
                            <p class="text-sm text-white/90 font-medium">
                              847 executive backgrounds from BMW, Siemens &amp;
                              Mercedes-Benz analyzed!
                            </p>
                            <div class="flex items-center gap-4 text-xs">
                              <div class="flex items-center gap-1">
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
                                  class="lucide lucide-download w-3 h-3 text-white"
                                >
                                  <path
                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                  ></path>
                                  <polyline
                                    points="7 10 12 15 17 10"
                                  ></polyline>
                                  <line
                                    x1="12"
                                    x2="12"
                                    y1="15"
                                    y2="3"
                                  ></line></svg
                                ><span class="font-bold text-white">4,247</span
                                ><span class="text-white/80"
                                  >professionals downloaded</span
                                >
                              </div>
                              <div class="flex items-center gap-1">
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
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
                                  class="lucide lucide-star w-3 h-3 fill-white text-white"
                                >
                                  <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                  ></path></svg
                                ><span class="text-white/80">(4.9)</span>
                              </div>
                            </div>
                          </div>
                          <div class="lg:col-span-5">
                            <div
                              class="bg-white rounded-[24px] border-2 border-[#F4991A]/30 p-4"
                            >
                              <div class="space-y-3 mb-4">
                                <h4 class="text-lg font-bold text-[#344F1F]">
                                  Get Your Exclusive Analysis
                                </h4>
                                <div
                                  class="inline-flex items-center border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-[#F4991A] bg-[#F4991A]/10 text-[#F4991A] text-xs font-bold rounded-full"
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
                                    class="lucide lucide-circle-check-big w-3 h-3 mr-1"
                                  >
                                    <path
                                      d="M21.801 10A10 10 0 1 1 17 3.335"
                                    ></path>
                                    <path d="m9 11 3 3L22 4"></path></svg
                                  >Free limited time offer
                                </div>
                              </div>
                              <form class="space-y-3">
                                <div class="grid grid-cols-2 gap-2">
                                  <input
                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                    placeholder="First Name *"
                                    required=""
                                    value=""
                                  /><input
                                    class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                    placeholder="Last Name *"
                                    required=""
                                    value=""
                                  />
                                </div>
                                <input
                                  type="email"
                                  class="flex w-full px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px] focus:border-[#F4991A]"
                                  placeholder="Your Email Address *"
                                  required=""
                                  value=""
                                />
                                <div class="grid grid-cols-3 gap-2">
                                  <button
                                    type="button"
                                    role="combobox"
                                    aria-controls="radix-«R2tqcuslb»"
                                    aria-expanded="false"
                                    aria-required="true"
                                    aria-autocomplete="none"
                                    dir="ltr"
                                    data-state="closed"
                                    data-placeholder=""
                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]"
                                  >
                                    <span style="pointer-events: none"
                                      >German Level *</span
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
                                    required=""
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
                                  >
                                    <option value=""></option></select
                                  ><button
                                    type="button"
                                    role="combobox"
                                    aria-controls="radix-«R4tqcuslb»"
                                    aria-expanded="false"
                                    aria-required="true"
                                    aria-autocomplete="none"
                                    dir="ltr"
                                    data-state="closed"
                                    data-placeholder=""
                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]"
                                  >
                                    <span style="pointer-events: none"
                                      >Field *</span
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
                                    required=""
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
                                  >
                                    <option value=""></option></select
                                  ><button
                                    type="button"
                                    role="combobox"
                                    aria-controls="radix-«R6tqcuslb»"
                                    aria-expanded="false"
                                    aria-required="true"
                                    aria-autocomplete="none"
                                    dir="ltr"
                                    data-state="closed"
                                    data-placeholder=""
                                    class="flex w-full items-center justify-between px-4 py-3 font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1 bg-white/90 border-2 border-[#344F1F]/20 h-9 text-[#344F1F] text-sm rounded-[12px]"
                                  >
                                    <span style="pointer-events: none"
                                      >Country *</span
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
                                    required=""
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
                                  >
                                    <option value=""></option>
                                  </select>
                                </div>
                                <button
                                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 px-6 w-full h-10 bg-[#F4991A] hover:bg-[#E5890F] text-white font-bold text-sm rounded-full transition-all duration-300"
                                  type="submit"
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
                                    class="lucide lucide-download w-4 h-4 mr-2"
                                  >
                                    <path
                                      d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                                    ></path>
                                    <polyline
                                      points="7 10 12 15 17 10"
                                    ></polyline>
                                    <line
                                      x1="12"
                                      x2="12"
                                      y1="15"
                                      y2="3"
                                    ></line></svg
                                  >GET EXCLUSIVE INSIGHTS NOW<svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 ml-2"
                                  >
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                </button>
                                <div
                                  class="flex items-center justify-center gap-4 text-xs text-[#344F1F]/70 pt-1"
                                >
                                  <div class="flex items-center gap-1">
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
                                      class="lucide lucide-shield w-3 h-3 text-[#344F1F]"
                                    >
                                      <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"
                                      ></path></svg
                                    ><span>Secure</span>
                                  </div>
                                  <div class="flex items-center gap-1">
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
                                      class="lucide lucide-zap w-3 h-3 text-[#F4991A]"
                                    >
                                      <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                                      ></path></svg
                                    ><span>Instant</span>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="container mx-auto px-4 lg:px-6 my-16">
            <section
              class="relative py-16 md:py-20 rounded-2xl overflow-hidden shadow-lg bg-gradient-to-b from-muted/30 to-background"
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
              <div class="absolute inset-0 bg-black/30 z-0 rounded-2xl"></div>
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
                  <div
                    class="inline-flex items-center rounded-full border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground border-white/80 bg-white/10 backdrop-blur-sm px-4 py-1.5 text-base w-fit"
                  >
                    <span class="text-white font-medium"
                      >Your Success Story Awaits</span
                    >
                  </div>
                  <h2
                    class="tracking-tight font-bold text-2xl sm:text-3xl text-white text-center"
                  >
                    Start Your Ausbildung Journey Today
                  </h2>
                  <p
                    class="text-base text-white/90 leading-relaxed max-w-2xl text-center"
                  >
                    Join hundreds of successful students who found their dream
                    Ausbildung through our marketplace. Browse verified
                    positions from employers actively hiring international
                    talent.
                  </p>
                  <div class="flex flex-col sm:flex-row items-center gap-3">
                    <a
                      href="dashboard/jobs.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Explore Job Openings</a
                    ><a
                      href="tools/eligibility-checker.html"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-14 px-8 py-6 text-lg font-medium rounded-full transition-all duration-300"
                      >Check Your Eligibility</a
                    >
                  </div>
                </div>
              </div>
            </section>
          </div>
        </main>
@endsection
