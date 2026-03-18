let currentStep = 0;
const totalQuestions = 7;
const answers = {
    reasonForChange: '',
    trainingProgress: '',
    workExperience: '',
    educationBackground: '',
    financialSituation: '',
    germanLevel: '',
    priorityFactors: []
};

function selectRadio(field, value, element, progress) {
    answers[field] = value;

    // Clear all siblings selection
    const parent = element.parentElement;
    parent.querySelectorAll('.flex.items-start').forEach(el => {
        el.classList.remove('option-selected');
        el.querySelector('.radio-circle').classList.remove('selected');
    });

    // Select this one
    element.classList.add('option-selected');
    element.querySelector('.radio-circle').classList.add('selected');

    // Training progress display
    if (field === 'trainingProgress' && progress !== undefined) {
        const display = document.getElementById('training-progress-display');
        display.classList.remove('hidden');
        document.getElementById('training-progress-value').textContent = progress + '%';
        document.getElementById('training-progress-bar').style.width = progress + '%';
    }

    updateNavButtons();
}

function toggleCheckbox(id, element) {
    const idx = answers.priorityFactors.indexOf(id);
    const cb = document.getElementById('cb-' + id);

    if (idx > -1) {
        answers.priorityFactors.splice(idx, 1);
        cb.classList.remove('checked');
        element.classList.remove('option-selected');
    } else {
        answers.priorityFactors.push(id);
        cb.classList.add('checked');
        element.classList.add('option-selected');
    }

    const count = answers.priorityFactors.length;
    const countEl = document.getElementById('priority-count');
    document.getElementById('priority-num').textContent = count;
    countEl.classList.toggle('hidden', count === 0);

    updateNavButtons();
}

function canProceed() {
    switch (currentStep) {
        case 0: case 8: return true;
        case 1: return answers.reasonForChange !== '';
        case 2: return answers.trainingProgress !== '';
        case 3: return answers.workExperience !== '';
        case 4: return answers.educationBackground !== '';
        case 5: return answers.financialSituation !== '';
        case 6: return answers.germanLevel !== '';
        case 7: return answers.priorityFactors.length > 0;
        default: return false;
    }
}

function updateNavButtons() {
    const btnNext = document.getElementById('btn-next');
    btnNext.disabled = !canProceed();
}

function showStep(step) {
    // Hide all steps
    document.querySelectorAll('.wizard-step').forEach(el => el.classList.add('hidden'));

    // Show target step
    const target = document.getElementById('step-' + step);
    target.classList.remove('hidden');

    // Progress bar
    const progressBar = document.getElementById('progress-bar');
    const navButtons = document.getElementById('nav-buttons');

    if (step > 0 && step < 8) {
        progressBar.classList.remove('hidden');
        navButtons.classList.remove('hidden');
        const pct = Math.round((step / 8) * 100);
        document.getElementById('current-question').textContent = step;
        document.getElementById('progress-percent').textContent = pct;
        document.getElementById('progress-fill').style.width = pct + '%';
    } else {
        progressBar.classList.add('hidden');
        navButtons.classList.add('hidden');
    }

    updateNavButtons();

    // Generate results on step 8
    if (step === 8) {
        generateResults();
    }

    // Scroll to top of wizard
    document.querySelector('.rounded-xl.border.bg-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function nextStep() {
    if (currentStep < 8) {
        currentStep++;
        showStep(currentStep);
    }
}

function prevStep() {
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
}

function resetWizard() {
    currentStep = 0;
    answers.reasonForChange = '';
    answers.trainingProgress = '';
    answers.workExperience = '';
    answers.educationBackground = '';
    answers.financialSituation = '';
    answers.germanLevel = '';
    answers.priorityFactors = [];

    // Clear all visual selections
    document.querySelectorAll('.option-selected').forEach(el => el.classList.remove('option-selected'));
    document.querySelectorAll('.radio-circle.selected').forEach(el => el.classList.remove('selected'));
    document.querySelectorAll('.checkbox-box.checked').forEach(el => el.classList.remove('checked'));
    document.getElementById('training-progress-display').classList.add('hidden');
    document.getElementById('priority-count').classList.add('hidden');

    showStep(0);
}

function calculatePathways() {
    const pathways = [
        { id: 'stay', name: 'Stay in Current Ausbildung', score: 0, timeline: 'Continue as planned', financial: 'Current stipend maintained', pros: [], cons: [], nextSteps: [] },
        { id: 'switch-same', name: 'Switch Ausbildung (Same Field)', score: 0, timeline: '4-6 weeks transition', financial: 'Similar or higher salary', pros: [], cons: [], nextSteps: [] },
        { id: 'switch-new', name: 'Switch Ausbildung (New Field)', score: 0, timeline: '6-8 weeks transition', financial: 'Variable based on field', pros: [], cons: [], nextSteps: [] },
        { id: 'umschulung', name: 'Umschulung (Retraining)', score: 0, timeline: '24 months', financial: 'Funded by Agentur f\u00fcr Arbeit', pros: [], cons: [], nextSteps: [] },
        { id: 'dual-study', name: 'Dual Study Program', score: 0, timeline: '3-4 years', financial: 'Company salary \u20ac800-1500/month', pros: [], cons: [], nextSteps: [] },
        { id: 'evening', name: 'Evening/Part-time Training', score: 0, timeline: '3-4 years', financial: 'Keep current income', pros: [], cons: [], nextSteps: [] }
    ];

    pathways.forEach(p => {
        // Reason for change scoring
        if (answers.reasonForChange === 'company-issues') {
            if (p.id === 'switch-same') p.score += 30;
            if (p.id === 'stay') p.score -= 10;
        } else if (answers.reasonForChange === 'wrong-career') {
            if (p.id === 'switch-new') p.score += 25;
            if (p.id === 'umschulung') p.score += 20;
        } else if (answers.reasonForChange === 'higher-qualification') {
            if (p.id === 'dual-study') p.score += 30;
        } else if (answers.reasonForChange === 'personal-circumstances') {
            if (p.id === 'evening') p.score += 20;
        } else if (answers.reasonForChange === 'better-opportunities') {
            if (p.id === 'switch-new') p.score += 20;
            if (p.id === 'umschulung') p.score += 15;
        }

        // Training progress scoring
        if (answers.trainingProgress === 'not-started') {
            if (p.id !== 'stay') p.score += 10;
        } else if (answers.trainingProgress === 'probation') {
            if (p.id === 'switch-same' || p.id === 'switch-new') p.score += 20;
        } else if (answers.trainingProgress === 'more-than-75') {
            if (p.id === 'stay') p.score += 25;
            if (p.id === 'switch-new') p.score -= 10;
        }

        // Work experience scoring
        if (answers.workExperience === 'extensive-experience' || answers.workExperience === 'related-field') {
            if (p.id === 'umschulung') p.score += 25;
        } else if (answers.workExperience === 'no-experience') {
            if (p.id === 'switch-same' || p.id === 'switch-new') p.score += 10;
        }

        // Education scoring
        if (answers.educationBackground === 'abitur' || answers.educationBackground === 'fachabitur') {
            if (p.id === 'dual-study') p.score += 25;
        } else if (answers.educationBackground === 'university-degree') {
            if (p.id === 'umschulung') p.score += 15;
            if (p.id === 'dual-study') p.score -= 10;
        }

        // Financial scoring
        if (answers.financialSituation === 'need-continuous-income') {
            if (p.id === 'evening') p.score += 30;
            if (p.id === 'stay') p.score += 15;
        } else if (answers.financialSituation === 'have-savings' || answers.financialSituation === 'flexible') {
            if (p.id === 'umschulung') p.score += 10;
            if (p.id === 'dual-study') p.score += 10;
        }

        // German level scoring
        if (answers.germanLevel === 'a1-a2') {
            if (p.id === 'switch-same') p.score += 10;
            if (p.id === 'dual-study') p.score -= 20;
        } else if (answers.germanLevel === 'b2' || answers.germanLevel === 'c1' || answers.germanLevel === 'native') {
            if (p.id === 'dual-study') p.score += 15;
            if (p.id === 'umschulung') p.score += 10;
        }

        // Priority factors scoring
        if (answers.priorityFactors.includes('quick-completion')) {
            if (p.id === 'switch-same') p.score += 15;
            if (p.id === 'switch-new') p.score += 10;
            if (p.id === 'dual-study') p.score -= 10;
        }
        if (answers.priorityFactors.includes('financial-stability')) {
            if (p.id === 'evening') p.score += 20;
            if (p.id === 'stay') p.score += 10;
        }
        if (answers.priorityFactors.includes('academic-degree')) {
            if (p.id === 'dual-study') p.score += 30;
        }
        if (answers.priorityFactors.includes('visa-security')) {
            if (p.id === 'stay') p.score += 15;
            if (p.id === 'switch-same') p.score += 10;
        }

        // Clamp score
        p.score = Math.max(0, Math.min(100, p.score));

        // Assign pros, cons, next steps
        switch (p.id) {
            case 'stay':
                p.pros = ['No visa complications', 'Maintain all current benefits', 'Graduate on original timeline', 'No application stress'];
                p.cons = ['Unresolved issues may persist', 'Potential regret later', 'Limited growth if unhappy'];
                p.nextSteps = ['Schedule meeting with training supervisor', 'Document issues for chamber mediation', 'Explore internal transfer options', 'Set clear improvement timeline'];
                break;
            case 'switch-same':
                p.pros = ['Maximum credit transfer', 'Faster completion', 'Familiar field', 'Strong visa protection'];
                p.cons = ['Limited to same profession', 'Employer availability varies', 'May face similar issues'];
                p.nextSteps = ['Contact IHK/HWK advisor immediately', 'Prepare resignation letter (use our template)', 'Apply to 5-10 companies in same field', 'Schedule chamber credit evaluation'];
                break;
            case 'switch-new':
                p.pros = ['Fresh career start', 'Follow true interests', 'Better long-term prospects', 'Expanded network'];
                p.cons = ['Limited credit transfer', 'Longer training duration', 'Starting from beginning'];
                p.nextSteps = ['Research target profession requirements', 'Book career counseling at Agentur f\u00fcr Arbeit', 'Attend info sessions for new field', 'Create transition timeline with visa buffer'];
                break;
            case 'umschulung':
                p.pros = ['Shorter than full Ausbildung', '100% funding available', 'Recognized qualification', 'Intensive support'];
                p.cons = ['Strict eligibility', 'Intensive pace', 'Limited programs'];
                p.nextSteps = ['Apply for Bildungsgutschein at Agentur f\u00fcr Arbeit', 'Gather work experience documentation', 'Research approved Umschulung providers', 'Prepare for assessment interview'];
                break;
            case 'dual-study':
                p.pros = ["Bachelor's degree", 'Higher earning potential', 'Company sponsorship', 'Prestigious path'];
                p.cons = ['Demanding schedule', 'Limited positions', 'Long commitment'];
                p.nextSteps = ['Check university application deadlines', 'Prepare application documents', 'Apply to partner companies', 'Improve German to C1 if needed'];
                break;
            case 'evening':
                p.pros = ['Maintain income', 'Lower risk', 'Gradual transition', 'Flexible pace'];
                p.cons = ['Very long duration', 'Exhausting schedule', 'Limited social life'];
                p.nextSteps = ['Research evening program providers', 'Discuss with current employer', 'Plan energy management strategy', 'Apply for Aufstiegs-BAf\u00f6G if eligible'];
                break;
        }
    });

    pathways.sort((a, b) => b.score - a.score);
    return pathways;
}

function generateResults() {
    const pathways = calculatePathways();
    const primary = pathways[0];
    const alternatives = pathways.slice(1, 3);

    // Get URLs from data attributes set in blade template
    const configEl = document.getElementById('career-pathway-config');
    const mascotUrl = configEl ? configEl.dataset.mascotUrl : '';
    const jobsUrl = configEl ? configEl.dataset.jobsUrl : '#';
    const consultationUrl = configEl ? configEl.dataset.consultationUrl : '#';

    const container = document.getElementById('results-container');
    container.innerHTML = `
        <div class="text-center">
            <div class="flex justify-center mb-6">
                <img src="${mascotUrl}" alt="Young Oak mascot guiding your career pathway" width="200" height="200" class="animate-float-slow" />
            </div>
            <h2 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-3">Your Recommended Pathway</h2>
            <p class="text-muted-foreground text-lg">Based on your answers, here's the optimal career change path for you</p>
        </div>

        <!-- Primary Recommendation -->
        <div class="rounded-xl border p-6 border-primary/50 bg-primary/5">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center gap-3">
                    <div class="p-3 rounded-lg bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-primary"><path d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"></path><circle cx="12" cy="12" r="10"></circle></svg>
                    </div>
                    <div>
                        <h3 class="tracking-tight font-bold text-lg text-secondary">${primary.name}</h3>
                        <p class="text-sm text-muted-foreground">Best match for your situation</p>
                    </div>
                </div>
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-xs bg-primary text-primary-foreground">${Math.round(primary.score)}% Match</span>
            </div>

            <div class="w-full bg-secondary/20 rounded-full h-3 mb-6">
                <div class="bg-primary h-3 rounded-full transition-all duration-500" style="width: ${primary.score}%"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div>
                    <h4 class="tracking-tight font-bold text-base text-secondary mb-2">Advantages</h4>
                    <ul class="space-y-1">
                        ${primary.pros.map(p => `<li class="flex items-start gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-secondary mt-0.5 flex-shrink-0"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg><span>${p}</span></li>`).join('')}
                    </ul>
                </div>
                <div>
                    <h4 class="tracking-tight font-bold text-base text-primary mb-2">Considerations</h4>
                    <ul class="space-y-1">
                        ${primary.cons.map(c => `<li class="flex items-start gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mt-0.5 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg><span>${c}</span></li>`).join('')}
                    </ul>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-6 p-4 bg-background rounded-lg">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span class="text-sm"><span class="font-semibold">Timeline:</span> ${primary.timeline}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><path d="M4 10h12"></path><path d="M4 14h9"></path><path d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"></path></svg>
                    <span class="text-sm"><span class="font-semibold">Financial:</span> ${primary.financial}</span>
                </div>
            </div>

            <div>
                <h4 class="tracking-tight font-bold text-base mb-3">Recommended Next Steps</h4>
                <ol class="space-y-2">
                    ${primary.nextSteps.map((s, i) => `<li class="flex gap-3 text-sm"><span class="font-bold text-primary">${i + 1}.</span><span>${s}</span></li>`).join('')}
                </ol>
            </div>
        </div>

        <!-- Alternative Options -->
        <div>
            <h3 class="tracking-tight font-bold text-lg text-secondary mb-3">Alternative Options to Consider</h3>
            <div class="grid md:grid-cols-2 gap-4">
                ${alternatives.map(alt => `
                    <div class="rounded-xl border bg-card text-card-foreground shadow p-4">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"></path><circle cx="12" cy="12" r="10"></circle></svg>
                                <h4 class="tracking-tight font-bold text-base">${alt.name}</h4>
                            </div>
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-xs bg-secondary text-secondary-foreground">${Math.round(alt.score)}%</span>
                        </div>
                        <p class="text-sm text-muted-foreground mb-3">Timeline: ${alt.timeline}</p>
                        <div class="w-full bg-secondary/20 rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full transition-all duration-500" style="width: ${alt.score}%"></div>
                        </div>
                    </div>
                `).join('')}
            </div>
        </div>

        <!-- Start Over & CTA -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button onclick="resetWizard()" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>
                    Start Over
                </button>
        </div>

        <!-- CTA Section -->
        <div class="relative rounded-2xl overflow-hidden p-8 bg-gradient-to-br from-primary/10 to-orange/10 border">
            <div class="text-center max-w-2xl mx-auto">
                <h3 class="tracking-tight font-bold text-xl sm:text-2xl text-secondary mb-3">Explore Your Career Options</h3>
                <p class="text-muted-foreground mb-6">Now that you know your best pathway, browse live Ausbildung opportunities from verified German employers that match your career goals.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="${jobsUrl}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8">Browse Jobs</a>
                    <a href="${consultationUrl}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">Get Consultation</a>
                </div>
            </div>
        </div>
    `;
}
