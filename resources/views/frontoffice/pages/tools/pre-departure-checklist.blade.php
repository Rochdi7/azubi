@extends('frontoffice.layouts.app')

@section('title', 'Pre-Departure Checklist for Germany | Complete Ausbildung Moving Checklist | Azubi')

@section('meta')
    <meta name="description"
        content="Comprehensive checklist of everything you need before moving to Germany for Ausbildung.">
    <meta property="og:title" content="Pre-Departure Checklist for Germany | Complete Ausbildung Moving Checklist | Azubi">
    <meta property="og:description"
        content="Comprehensive checklist of everything you need before moving to Germany for Ausbildung.">
@endsection

@section('content')
    <main role="main" class="py-8 md:py-12">
        <div class="container px-4 md:px-6 max-w-7xl mx-auto">
            <main role="main" class="jsx-5c82ed4a8cf70ebf space-y-8">
                <div class="text-card-foreground shadow p-6 rounded-2xl border-2 bg-cream border-beige">
                    <div class="flex items-start gap-4">
                        <div class="p-3 rounded-xl flex-shrink-0 bg-green text-cream">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-luggage h-6 w-6">
                                <path d="M6 20a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2"></path>
                                <path d="M8 18V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v14"></path>
                                <path d="M10 20h4"></path>
                                <circle cx="16" cy="20" r="2"></circle>
                                <circle cx="8" cy="20" r="2"></circle>
                            </svg>
                        </div>
                        <div class="flex-1 space-y-2">
                            <h2 class="text-xl font-semibold text-green">
                                Your Personalized Pre-Departure Checklist
                            </h2>
                            <p class="text-green/70 text-sm leading-relaxed">
                                Moving to Germany requires careful preparation. Tell us
                                about your situation and we&#x27;ll generate a
                                comprehensive, personalized checklist tailored
                                specifically for you - covering documents, finances,
                                health, accommodation, and everything you need for a
                                smooth transition.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-card-foreground shadow p-8 rounded-2xl bg-cream border-2 border-beige">
                    <div class="jsx-5c82ed4a8cf70ebf space-y-6">
                        <div class="jsx-5c82ed4a8cf70ebf">
                            <h3 class="jsx-5c82ed4a8cf70ebf text-lg font-semibold">
                                Your Details
                            </h3>
                            <p class="jsx-5c82ed4a8cf70ebf text-sm text-muted-foreground">
                                Fill in your information to get a personalized
                                checklist. Fields marked with * are required.
                            </p>
                        </div>
                        <div class="jsx-5c82ed4a8cf70ebf grid md:grid-cols-2 gap-4">
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="nationality">Nationality
                                    <span class="jsx-5c82ed4a8cf70ebf text-orange">*</span></label><button type="button"
                                    role="combobox" aria-controls="radix-«Rgl53peslb»" aria-expanded="false"
                                    aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                                    id="nationality">
                                    <span style="pointer-events: none">Select nationality</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground" aria-hidden="true">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><select aria-hidden="true" tabindex="-1"
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
                          "></select>
                            </div>
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="familyStatus">Family Status
                                    <span class="jsx-5c82ed4a8cf70ebf text-orange">*</span></label><button type="button"
                                    role="combobox" aria-controls="radix-«Rh553peslb»" aria-expanded="false"
                                    aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                                    id="familyStatus">
                                    <span style="pointer-events: none">Select status</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground" aria-hidden="true">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><select aria-hidden="true" tabindex="-1"
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
                          "></select>
                            </div>
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="city">German City
                                    <span class="jsx-5c82ed4a8cf70ebf text-orange">*</span></label><button type="button"
                                    role="combobox" aria-controls="radix-«Ri553peslb»" aria-expanded="false"
                                    aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                                    id="city">
                                    <span style="pointer-events: none">Select city</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                        aria-hidden="true">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><select aria-hidden="true" tabindex="-1"
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
                          "></select>
                            </div>
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="arrivalDate">Arrival Date
                                    <span class="jsx-5c82ed4a8cf70ebf text-orange">*</span></label><input type="date"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50"
                                    id="arrivalDate" value="" />
                            </div>
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="accommodationType">Accommodation Type</label><button type="button"
                                    role="combobox" aria-controls="radix-«Rj553peslb»" aria-expanded="false"
                                    aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                                    id="accommodationType">
                                    <span style="pointer-events: none">Select type</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                        aria-hidden="true">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><select aria-hidden="true" tabindex="-1"
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
                          "></select>
                            </div>
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="sector">Ausbildung Sector
                                    <span class="jsx-5c82ed4a8cf70ebf text-orange">*</span></label><button type="button"
                                    role="combobox" aria-controls="radix-«Rjl53peslb»" aria-expanded="false"
                                    aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                                    id="sector">
                                    <span style="pointer-events: none">Select sector</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                        aria-hidden="true">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><select aria-hidden="true" tabindex="-1"
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
                          "></select>
                            </div>
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="germanLevel">German Language Level</label><button type="button" role="combobox"
                                    aria-controls="radix-«Rk553peslb»" aria-expanded="false" aria-autocomplete="none"
                                    dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                                    id="germanLevel">
                                    <span style="pointer-events: none">Select level</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                        aria-hidden="true">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><select aria-hidden="true" tabindex="-1"
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
                          "></select>
                            </div>
                            <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="budget">Budget</label><button type="button" role="combobox"
                                    aria-controls="radix-«Rkl53peslb»" aria-expanded="false" aria-autocomplete="none"
                                    dir="ltr" data-state="closed" data-placeholder=""
                                    class="flex h-12 w-full items-center justify-between rounded-lg border border-input bg-white px-4 py-3 text-sm font-medium ring-offset-background placeholder:text-muted-foreground transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary disabled:cursor-not-allowed disabled:opacity-50 hover:border-primary/50 [&amp;&gt;span]:line-clamp-1"
                                    id="budget">
                                    <span style="pointer-events: none">Select budget</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down h-4 w-4 text-muted-foreground"
                                        aria-hidden="true">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg></button><select aria-hidden="true" tabindex="-1"
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
                          "></select>
                            </div>
                        </div>
                        <div class="jsx-5c82ed4a8cf70ebf space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Dietary
                                Needs</label>
                            <div class="jsx-5c82ed4a8cf70ebf grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="jsx-5c82ed4a8cf70ebf flex items-center space-x-2">
                                    <button type="button" role="checkbox" aria-checked="true" data-state="checked"
                                        value="on"
                                        class="peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20"
                                        id="dietary-None">
                                        <span data-state="checked" class="flex items-center justify-center text-current"
                                            style="pointer-events: none"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-check h-4 w-4">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg></span></button><input type="checkbox" aria-hidden="true"
                                        tabindex="-1"
                                        style="
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                              transform: translateX(-100%);
                            "
                                        checked="" value="on" /><label for="dietary-None"
                                        class="jsx-5c82ed4a8cf70ebf text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer">None</label>
                                </div>
                                <div class="jsx-5c82ed4a8cf70ebf flex items-center space-x-2">
                                    <button type="button" role="checkbox" aria-checked="false" data-state="unchecked"
                                        value="on"
                                        class="peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20"
                                        id="dietary-Vegetarian"></button><input type="checkbox" aria-hidden="true"
                                        tabindex="-1"
                                        style="
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                              transform: translateX(-100%);
                            "
                                        value="on" /><label for="dietary-Vegetarian"
                                        class="jsx-5c82ed4a8cf70ebf text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer">Vegetarian</label>
                                </div>
                                <div class="jsx-5c82ed4a8cf70ebf flex items-center space-x-2">
                                    <button type="button" role="checkbox" aria-checked="false" data-state="unchecked"
                                        value="on"
                                        class="peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20"
                                        id="dietary-Vegan"></button><input type="checkbox" aria-hidden="true"
                                        tabindex="-1"
                                        style="
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                              transform: translateX(-100%);
                            "
                                        value="on" /><label for="dietary-Vegan"
                                        class="jsx-5c82ed4a8cf70ebf text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer">Vegan</label>
                                </div>
                                <div class="jsx-5c82ed4a8cf70ebf flex items-center space-x-2">
                                    <button type="button" role="checkbox" aria-checked="false" data-state="unchecked"
                                        value="on"
                                        class="peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20"
                                        id="dietary-Halal"></button><input type="checkbox" aria-hidden="true"
                                        tabindex="-1"
                                        style="
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                              transform: translateX(-100%);
                            "
                                        value="on" /><label for="dietary-Halal"
                                        class="jsx-5c82ed4a8cf70ebf text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer">Halal</label>
                                </div>
                                <div class="jsx-5c82ed4a8cf70ebf flex items-center space-x-2">
                                    <button type="button" role="checkbox" aria-checked="false" data-state="unchecked"
                                        value="on"
                                        class="peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20"
                                        id="dietary-Kosher"></button><input type="checkbox" aria-hidden="true"
                                        tabindex="-1"
                                        style="
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                              transform: translateX(-100%);
                            "
                                        value="on" /><label for="dietary-Kosher"
                                        class="jsx-5c82ed4a8cf70ebf text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer">Kosher</label>
                                </div>
                                <div class="jsx-5c82ed4a8cf70ebf flex items-center space-x-2">
                                    <button type="button" role="checkbox" aria-checked="false" data-state="unchecked"
                                        value="on"
                                        class="peer h-5 w-5 shrink-0 rounded border-2 border-primary ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground hover:border-primary hover:bg-orange-light/20"
                                        id="dietary-Gluten-Free"></button><input type="checkbox" aria-hidden="true"
                                        tabindex="-1"
                                        style="
                              position: absolute;
                              pointer-events: none;
                              opacity: 0;
                              margin: 0;
                              transform: translateX(-100%);
                            "
                                        value="on" /><label for="dietary-Gluten-Free"
                                        class="jsx-5c82ed4a8cf70ebf text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer">Gluten-Free</label>
                                </div>
                            </div>
                        </div>
                        <div class="jsx-5c82ed4a8cf70ebf pt-4 space-y-4">
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-14 px-10 text-base w-full bg-orange hover:bg-orange-hover text-white rounded-full">
                                Generate My Personalized Checklist
                            </button>
                            <div class="jsx-5c82ed4a8cf70ebf flex justify-center"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 mb-8 space-y-6">
                    <div class="bg-beige border-2 border-border rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-orange rounded-xl flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-info h-6 w-6 text-white">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h2 class="text-2xl font-bold text-green mb-2">
                                    How to Use the Pre-Departure Checklist
                                </h2>
                                <p class="text-green/70">
                                    Get a comprehensive checklist of everything you need
                                    to prepare before moving to Germany for your
                                    Ausbildung.
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
                                class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                        1
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green text-lg mb-2">
                                            Enter Departure Date
                                        </h4>
                                        <p class="text-green/70 leading-relaxed">
                                            Select your planned departure date to get
                                            timeline-based task recommendations for 3 months,
                                            1 month, 2 weeks, and 1 week before departure.
                                        </p>
                                    </div>
                                    <div class="hidden lg:flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-5 h-5 text-orange/50">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                        2
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green text-lg mb-2">
                                            Add Personal Details
                                        </h4>
                                        <p class="text-green/70 leading-relaxed">
                                            Provide your nationality, family status,
                                            destination city, and other relevant information
                                            to personalize your checklist.
                                        </p>
                                    </div>
                                    <div class="hidden lg:flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-5 h-5 text-orange/50">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-white border-2 border-beige rounded-xl p-5 hover:border-orange transition-colors duration-200">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-10 h-10 rounded-full bg-orange text-white flex items-center justify-center font-bold text-lg flex-shrink-0">
                                        3
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-green text-lg mb-2">
                                            Get Complete Checklist
                                        </h4>
                                        <p class="text-green/70 leading-relaxed">
                                            Receive a comprehensive, prioritized checklist
                                            covering documents, finances, health,
                                            accommodation, packing, and arrival essentials.
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-info w-5 h-5 text-white">
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
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar w-5 h-5 text-orange">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Departure Date
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                Your planned arrival date in Germany
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-map-pin w-5 h-5 text-orange">
                                                <path
                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                </path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Current Location
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                Your home country/nationality
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-house w-5 h-5 text-orange">
                                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                                <path
                                                    d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Destination City
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                German city where you will live
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-text w-5 h-5 text-orange">
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
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
                                                Ausbildung sector and visa requirements
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users w-5 h-5 text-orange">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
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
                                                Single, couple, or with children
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-cream border-2 border-beige rounded-2xl p-6">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="p-2 bg-green rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-info w-5 h-5 text-white">
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
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big w-5 h-5 text-green">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Pre-Departure Tasks
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                Timeline-based tasks for 3 months, 1 month, 2
                                                weeks, and 1 week before departure
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-text w-5 h-5 text-green">
                                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                <path d="M10 9H8"></path>
                                                <path d="M16 13H8"></path>
                                                <path d="M16 17H8"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Document Checklist
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                Complete list of required documents with
                                                visa-specific requirements
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-briefcase w-5 h-5 text-green">
                                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Packing List
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                Season-appropriate packing recommendations and
                                                essentials
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-house w-5 h-5 text-green">
                                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                                <path
                                                    d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Housing Setup
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                Accommodation preparation and what to bring for
                                                your living space
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-award w-5 h-5 text-green">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                Registration Steps
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                What to do upon arrival including Anmeldung and
                                                city registration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="bg-white border-2 border-beige rounded-xl p-4 hover:border-orange transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <div class="p-2 bg-beige rounded-lg flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar w-5 h-5 text-green">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-green mb-1">
                                                First Week Plan
                                            </h4>
                                            <p class="text-sm text-green/70">
                                                Essential tasks for your first week in Germany
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-orange/10 border-2 border-orange/20 rounded-2xl p-5">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-info w-5 h-5 text-orange flex-shrink-0 mt-0.5">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                            </svg>
                            <p class="text-green/80 leading-relaxed">
                                Checklist includes tasks for 3 months, 1 month, 2 weeks,
                                and 1 week before departure, plus arrival day essentials
                                for Germany.
                            </p>
                        </div>
                    </div>
                </div>
                <section class="bg-card border border-border rounded-lg p-6 md:p-8 mb-8">
                    <h3 class="tracking-tight font-semibold text-base sm:text-lg text-secondary mb-6">
                        Frequently Asked Questions
                    </h3>
                    <div class="space-y-4">
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">When should I start preparing for my
                                    departure to
                                    Germany?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Begin preparations at least 4 weeks before departure.
                                    Legal documents (apostilles, translations) can take
                                    2-4 weeks to process. Financial setup (blocked
                                    account) requires 1-2 weeks. Start visa application
                                    8-12 weeks before planned departure if not yet
                                    obtained. Use the timeline view in this checklist to
                                    see exactly what to do when - items are organized from
                                    4 weeks out down to first 72 hours in Germany.
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">What are the absolute must-have items I
                                    cannot
                                    skip?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Critical items (will prevent entry or cause legal
                                    issues): Valid passport (6+ months validity), German
                                    visa, Ausbildung contract, blocked account proof
                                    (€11,904), German health insurance certificate,
                                    Wohnungsgeberbestätigung (landlord confirmation for
                                    Anmeldung), and cash Euros (€1,000-1,500). Without
                                    these, you cannot enter Germany, register with city,
                                    or start work legally. Check all &quot;urgent&quot;
                                    priority items in the checklist - these are
                                    non-negotiable.
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">Do I need different items depending on
                                    which German
                                    city I&#x27;m moving to?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Core items are the same for all cities, but practical
                                    differences exist: Berlin/Munich have 4-6 week waits
                                    for Anmeldung appointments (book immediately upon
                                    arrival), smaller cities allow walk-ins. Winter
                                    clothing urgency varies - Munich/Hamburg colder than
                                    Frankfurt. Housing markets differ - bring more initial
                                    cash for expensive cities (Munich, Frankfurt,
                                    Stuttgart €1,500 vs Leipzig, Dresden €1,000).
                                    Transport costs vary (€100/month in large cities vs
                                    €50 in small towns). Use the AI Survival Guide feature
                                    (after completing form) to get city-specific advice.
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">What if I&#x27;m moving with family or
                                    children?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Additional items needed: Children&#x27;s school
                                    records (apostilled + translated), vaccination records
                                    for each child (MMR mandatory in Germany), birth
                                    certificates for all family members, family health
                                    insurance (covers spouse + children, ~€180/month vs
                                    €120 solo), larger accommodation contract,
                                    toys/comfort items for kids, school supplies. Budget
                                    increases significantly: Rent +€200-400, food
                                    +€100-200 per person, initial setup costs +€500-1,000.
                                    Book larger accommodation before arrival. Check
                                    &quot;Education Documents&quot; category for
                                    school-related items. Children must enroll in school
                                    within 6 weeks of arrival (assigned by address).
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">What winter clothing should I bring, and
                                    when?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    If arriving October-March: Essential immediately.
                                    Bring warm jacket, boots, gloves from home. If
                                    arriving April-September: Don&#x27;t pack heavy winter
                                    items - buy in Germany during summer sales (July) or
                                    winter sales (January) for 50-70% off. German winter:
                                    -5°C to 5°C (November-March), but windchill makes it
                                    feel colder. Must-haves by November: Waterproof winter
                                    jacket (€80-200), insulated boots (€50-100), warm
                                    gloves (€10-30), scarf (€10-20), hat (€5-15). Buy at:
                                    C&amp;A, H&amp;M, TK Maxx (budget), or Decathlon, Jack
                                    Wolfskin (quality). Layers work better than one heavy
                                    coat. Don&#x27;t bring from tropical countries -
                                    wastes luggage space and German winter gear is
                                    superior.
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">What should I do in my first 72 hours
                                    after landing
                                    in Germany?</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Hour 1-4: Airport to accommodation - Get cash from ATM
                                    if needed, buy SIM card at airport if available
                                    (€20-30), take train/bus to accommodation (save cash,
                                    €10-15 vs €50-80 taxi). Day 1 Evening: Unpack
                                    essentials, test SIM card, message family you arrived
                                    safely, locate nearest supermarket (buy basics for
                                    next day), set multiple alarms for sleep schedule
                                    adjustment. Day 2: Buy proper SIM card if not done
                                    (Aldi/Lidl - €10), grocery shopping (€50-100 for
                                    week), book Anmeldung appointment online (CRITICAL -
                                    some cities have 6-week waits), explore neighborhood,
                                    locate work/school address. Day 3: Prepare for first
                                    work day, contact employer to confirm start time,
                                    organize all documents for Anmeldung, rest and
                                    mentally prepare. Use the &quot;First 72 Hours&quot;
                                    section of checklist for detailed step-by-step tasks.
                                    If weekend arrival, everything shifts by 2 days
                                    (Sunday = all stores closed).
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">What items do people commonly forget that
                                    cause major
                                    problems?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Top regrets from past students: (1)
                                    Wohnungsgeberbestätigung - Without landlord signature
                                    on this form, cannot do Anmeldung, which blocks bank
                                    account, residence permit, everything. Get signed
                                    IMMEDIATELY upon moving in. (2) Enough passport photos
                                    - Need 20-30 total (€8-15 for 6 in Germany vs €0.50
                                    each at home). Needed for residence permit, bank,
                                    insurance, student ID, job applications. (3) Cash
                                    Euros - Cards don&#x27;t work everywhere initially,
                                    ATM fees €5-10 per withdrawal. Bring €1,000-1,500
                                    cash. (4) Proper winter gear - Underestimating cold
                                    leads to misery and unexpected €200-300 expense in
                                    first month. (5) Phone unlock - Locked phones cannot
                                    use German SIM, forcing expensive international
                                    roaming or new phone purchase. (6) Anmeldung
                                    appointment booking - Waiting weeks leads to delayed
                                    bank account (no salary!), delayed residence permit
                                    (legal issues). (7) Health insurance activation - Some
                                    forget to give certificate to employer, causing
                                    insurance gaps and potential fines.
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">Can I print or download this checklist to
                                    take with
                                    me?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Yes! Click the &quot;Print Checklist&quot; button at
                                    the bottom of the page to generate a printer-friendly
                                    PDF version with all your checked items marked. The
                                    printed version includes: All 100 items organized by
                                    category, timeline view showing what to do when, your
                                    checked progress, urgent items highlighted, and space
                                    for notes. Recommended: Print before departure and
                                    keep in travel folder. Your progress is saved in
                                    browser (localStorage), so you can return anytime to
                                    update. For digital backup: Screenshot your progress
                                    or export to PDF. Pro tip: Print two copies - one for
                                    travel documents folder, one to keep at home with
                                    family as reference for what you&#x27;ve completed.
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">How much money should I budget for the
                                    first month in
                                    Germany?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Minimum first month budget (tight): €730-1,000.
                                    Breakdown: Rent €300-500 (dormitory/shared), Food
                                    €150-200 (cooking at home, Aldi/Lidl), Transport
                                    €50-80 (monthly ticket), Phone €10 (Aldi Talk
                                    prepaid), Personal/misc €100-150, Insurance €120
                                    (before employer contribution). Comfortable budget:
                                    €1,200-1,500. Includes: Rent €500-800 (studio/better
                                    location), Food €200-250 (occasional eating out),
                                    Transport €80-100, Phone €15-20, Entertainment €100,
                                    Shopping €100, Buffer €100-200. One-time arrival costs
                                    (first week): €500-1,000 for bedding (€50-100),
                                    kitchen basics (€50-100), winter clothing if needed
                                    (€200-500), deposits/registrations (€100-200). Total
                                    recommended cash/available: €2,000-2,500 for first
                                    month to cover all expenses until first salary. Cities
                                    vary: Munich/Frankfurt +30%, Berlin/Hamburg +20%,
                                    Leipzig/Dresden -20% vs average. Use blocked account:
                                    Withdraw €992/month (legally allowed) to cover most
                                    expenses.
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-border rounded-lg overflow-hidden bg-background transition-all duration-200">
                            <button
                                class="w-full flex items-center justify-between p-4 md:p-5 text-left hover:bg-muted/50 transition-colors"
                                aria-expanded="false">
                                <span class="font-semibold text-foreground pr-4">What emergency situations should I prepare
                                    for, and
                                    how?</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-down h-5 w-5 text-muted-foreground flex-shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                                <div
                                    class="p-4 md:p-5 pt-0 md:pt-0 text-sm md:text-base text-muted-foreground leading-relaxed">
                                    Top emergency scenarios and backup plans: (1)
                                    Lost/stolen passport: Have 5 photocopies + cloud
                                    scans, embassy contact saved, passport photos ready
                                    for emergency passport (2-week process). (2)
                                    Missed/delayed flight: Travel insurance (€20-50),
                                    emergency fund €500-1,000, employer contact to inform.
                                    (3) Accommodation falls through: Have backup hostel
                                    researched (€25-40/night), employer contact (may have
                                    emergency housing), cash for hotel. (4) Medical
                                    emergency: Health insurance card + printout, 112
                                    emergency number saved, hospital locations mapped,
                                    English-speaking doctor list (Doctolib app). (5) No
                                    Anmeldung appointment available: Try walk-in early
                                    morning (7 AM), travel to nearby smaller city
                                    Bürgeramt, employer HR can sometimes help. (6) Bank
                                    account delayed: Keep using blocked account
                                    withdrawals (€992/month allowed), N26 as backup
                                    (faster, online), employer may accept alternative
                                    payment initially. (7) Language barrier crisis: Google
                                    Translate app (offline mode), embassy contact,
                                    employer HR, expat community on Facebook. Save all
                                    emergency contacts (embassy, employer, hospital,
                                    police 112) in phone before departure. Keep €500
                                    emergency cash separate from daily money.
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
                        <a class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="{{ route('front.tools.document-checklist') }}">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-check w-6 h-6 text-orange group-hover:text-white transition-colors">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="m9 15 2 2 4-4"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors">
                                Document Checklist
                            </h3>
                            <p class="text-sm text-green/70 leading-relaxed mb-4">
                                Get a complete checklist of required documents for your
                                visa application
                            </p>
                            <div
                                class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                                <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize">planning</span>
                            </div>
                        </a><a
                            class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="{{ route('front.tools.application-timeline') }}">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar w-6 h-6 text-orange group-hover:text-white transition-colors">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors">
                                Application Timeline
                            </h3>
                            <p class="text-sm text-green/70 leading-relaxed mb-4">
                                Create a personalized timeline for your Ausbildung
                                application process
                            </p>
                            <div
                                class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                                <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize">planning</span>
                            </div>
                        </a><a
                            class="group relative bg-cream border-2 border-beige rounded-2xl p-6 hover:border-orange hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                            href="{{ route('front.tools.cover-letter') }}">
                            <div class="mb-4">
                                <div
                                    class="inline-flex p-3 rounded-xl bg-orange/10 group-hover:bg-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text w-6 h-6 text-orange group-hover:text-white transition-colors">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold text-green mb-2 group-hover:text-orange transition-colors">
                                Cover Letter Generator
                            </h3>
                            <p class="text-sm text-green/70 leading-relaxed mb-4">
                                Generate a professional German cover letter for your
                                Ausbildung application
                            </p>
                            <div
                                class="flex items-center gap-2 text-orange font-semibold text-sm group-hover:gap-3 transition-all">
                                <span>Try it free</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium bg-beige text-green rounded-full capitalize">planning</span>
                            </div>
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="inline-flex items-center gap-2 px-6 py-3 bg-orange hover:bg-orange-hover text-white rounded-full font-semibold transition-colors"
                            href="{{ route('front.tools') }}">Browse All Tools<svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg></a>
                    </div>
                </section>
            </main>
        </div>
    </main>
    </div>
    </main>
@endsection
