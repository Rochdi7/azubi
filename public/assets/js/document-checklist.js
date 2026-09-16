/*!
 * Azubi — Document Checklist Tool
 *
 * Copyright (c) 2026 Azubi. All rights reserved.
 * Proprietary and confidential. Unauthorised copying, modification or
 * distribution of this file, via any medium, is strictly prohibited.
 */

// Nationalities
const nationalities = ["Morocco","Spain","Italy","Germany","France","Egypt","Algeria","Other"];

// All documents
const allDocuments = [
    {id:"passport",name:"Valid Passport",description:"Passport valid for at least 6 months beyond intended stay in Germany",category:"Personal Documents",cost:"\u20AC50-150",time:"2-6 weeks",priority:"urgent",required:true,notes:"Must have at least 2 blank pages for visa stamps"},
    {id:"birth-certificate",name:"Birth Certificate",description:"Original birth certificate with apostille and German translation",category:"Personal Documents",cost:"\u20AC20-50",time:"1-3 weeks",priority:"urgent",required:true,notes:"Must be issued within last 6 months or apostilled"},
    {id:"passport-photos",name:"Biometric Passport Photos",description:"4-6 recent biometric passport photos (35mm x 45mm)",category:"Personal Documents",cost:"\u20AC10-20",time:"1 day",priority:"high",required:true,notes:"Must meet German biometric photo requirements"},
    {id:"marriage-certificate",name:"Marriage Certificate (if applicable)",description:"Marriage certificate with apostille and German translation",category:"Personal Documents",cost:"\u20AC30-60",time:"2-4 weeks",priority:"medium",required:false,notes:"Required if married or applying with spouse"},
    {id:"children-birth-certs",name:"Children's Birth Certificates (if applicable)",description:"Birth certificates for all children with apostille and translation",category:"Personal Documents",cost:"\u20AC30-50 per child",time:"2-4 weeks",priority:"medium",required:false,notes:"Required if applying with children"},
    {id:"name-change",name:"Name Change Certificate (if applicable)",description:"Official documentation of any name changes",category:"Personal Documents",cost:"\u20AC20-40",time:"1-2 weeks",priority:"medium",required:false},
    {id:"high-school-diploma",name:"High School Diploma",description:"Original high school diploma with apostille and German translation",category:"Educational Documents",cost:"\u20AC40-80",time:"3-6 weeks",priority:"urgent",required:true,notes:"Must be evaluated for German equivalency"},
    {id:"high-school-transcripts",name:"High School Transcripts",description:"Complete transcripts showing all grades and subjects",category:"Educational Documents",cost:"\u20AC30-60",time:"2-4 weeks",priority:"urgent",required:true,notes:"Must include grading scale explanation"},
    {id:"bachelor-degree",name:"Bachelor's Degree (if applicable)",description:"University degree certificate with apostille and translation",category:"Educational Documents",cost:"\u20AC50-100",time:"4-8 weeks",priority:"high",required:false,notes:"Include if you have higher education"},
    {id:"university-transcripts",name:"University Transcripts (if applicable)",description:"Complete university transcripts with courses and grades",category:"Educational Documents",cost:"\u20AC40-80",time:"3-6 weeks",priority:"high",required:false},
    {id:"language-certificates",name:"German Language Certificate",description:"B1/B2 German language proficiency certificate (Goethe, TestDaF, telc)",category:"Educational Documents",cost:"\u20AC150-200",time:"4-12 weeks",priority:"urgent",required:true,notes:"Minimum B1 required for most Ausbildung programs"},
    {id:"english-certificate",name:"English Language Certificate (optional)",description:"TOEFL, IELTS, or Cambridge certificate if applicable",category:"Educational Documents",cost:"\u20AC200-250",time:"4-8 weeks",priority:"low",required:false},
    {id:"vocational-certs",name:"Previous Vocational Certificates",description:"Any previous vocational training or professional certificates",category:"Educational Documents",cost:"\u20AC30-60",time:"2-4 weeks",priority:"medium",required:false,notes:"Can strengthen your application"},
    {id:"recognition-assessment",name:"Educational Recognition Assessment",description:"anabin or ZAB assessment of foreign qualifications",category:"Educational Documents",cost:"\u20AC100-200",time:"8-12 weeks",priority:"high",required:true,notes:"Required for foreign educational credentials"},
    {id:"blocked-account",name:"Blocked Account (Sperrkonto)",description:"Blocked account with minimum \u20AC11,208 for first year",category:"Financial Documents",cost:"\u20AC11,208 + setup fees",time:"2-4 weeks",priority:"urgent",required:true,notes:"Required for visa - use Fintiba, Deutsche Bank, or Expatrio"},
    {id:"blocked-account-confirm",name:"Blocked Account Confirmation Letter",description:"Official confirmation letter from blocked account provider",category:"Financial Documents",cost:"Included",time:"1 week",priority:"urgent",required:true,notes:"Automatically provided by blocked account provider"},
    {id:"bank-statements",name:"Bank Statements (Last 6 Months)",description:"Personal bank statements showing financial stability",category:"Financial Documents",cost:"\u20AC10-30",time:"1-2 weeks",priority:"high",required:true,notes:"Must show regular income or savings"},
    {id:"sponsorship-letter",name:"Sponsorship Letter (if applicable)",description:"Letter from sponsor with income proof and bank statements",category:"Financial Documents",cost:"\u20AC0",time:"1 week",priority:"medium",required:false,notes:"Alternative to blocked account in some cases"},
    {id:"income-tax",name:"Income Tax Returns",description:"Last 2 years of income tax returns or proof of income",category:"Financial Documents",cost:"\u20AC20-40",time:"1-2 weeks",priority:"medium",required:false,notes:"Strengthens financial proof"},
    {id:"scholarship-letter",name:"Scholarship Award Letter (if applicable)",description:"Official scholarship confirmation from recognized institution",category:"Financial Documents",cost:"\u20AC0",time:"2-4 weeks",priority:"medium",required:false,notes:"Can reduce blocked account requirement"},
    {id:"ausbildung-contract",name:"Ausbildung Training Contract",description:"Signed training contract from German company",category:"Professional Documents",cost:"\u20AC0",time:"4-12 weeks",priority:"urgent",required:true,notes:"Most critical document - required before visa application"},
    {id:"company-registration",name:"Company Registration Certificate",description:"Official registration certificate of training company",category:"Professional Documents",cost:"\u20AC0",time:"1 week",priority:"high",required:true,notes:"Provided by employer"},
    {id:"cv-resume",name:"CV/Resume (German format)",description:"Professional CV in German format (Europass or tabular)",category:"Professional Documents",cost:"\u20AC0-50",time:"1 week",priority:"urgent",required:true,notes:"Must include photo, complete work history, and education"},
    {id:"cover-letter",name:"Cover Letter (Motivationsschreiben)",description:"Motivation letter in German explaining interest in Ausbildung",category:"Professional Documents",cost:"\u20AC0-50",time:"1 week",priority:"high",required:true,notes:"Should be tailored to specific sector and company"},
    {id:"work-experience",name:"Work Experience Certificates",description:"Letters of recommendation and work certificates from previous employers",category:"Professional Documents",cost:"\u20AC0-30",time:"2-4 weeks",priority:"medium",required:false,notes:"Include if you have relevant work experience"},
    {id:"references",name:"Professional References",description:"Contact details of 2-3 professional references",category:"Professional Documents",cost:"\u20AC0",time:"1 week",priority:"low",required:false},
    {id:"portfolio",name:"Portfolio/Work Samples (if applicable)",description:"Portfolio of work for creative or technical fields",category:"Professional Documents",cost:"\u20AC0-100",time:"2-4 weeks",priority:"medium",required:false,notes:"Important for IT, design, engineering sectors"},
    {id:"health-insurance",name:"Health Insurance Proof",description:"Travel health insurance or German health insurance confirmation",category:"Medical Documents",cost:"\u20AC30-100/month",time:"1-2 weeks",priority:"urgent",required:true,notes:"Must cover minimum \u20AC30,000 for entire visa period"},
    {id:"medical-certificate",name:"Medical Fitness Certificate",description:"Doctor's certificate confirming fitness for training",category:"Medical Documents",cost:"\u20AC50-100",time:"1-2 weeks",priority:"high",required:true,notes:"Required for most Ausbildung programs, especially healthcare"},
    {id:"vaccination-records",name:"Vaccination Records",description:"Complete vaccination history including COVID-19, measles, etc.",category:"Medical Documents",cost:"\u20AC20-40",time:"1 week",priority:"high",required:true,notes:"Measles vaccination mandatory in Germany"},
    {id:"tb-test",name:"TB Test Certificate (for certain countries)",description:"Tuberculosis test certificate if required for your nationality",category:"Medical Documents",cost:"\u20AC40-80",time:"1-2 weeks",priority:"medium",required:false,notes:"Required for applicants from high-risk countries"},
    {id:"medical-history",name:"Medical History Summary",description:"Summary of medical history and current medications",category:"Medical Documents",cost:"\u20AC30-60",time:"1 week",priority:"low",required:false},
    {id:"police-clearance",name:"Police Clearance Certificate",description:"Criminal record certificate from country of residence",category:"Legal Documents",cost:"\u20AC20-100",time:"4-8 weeks",priority:"urgent",required:true,notes:"Must be issued within last 3 months and apostilled"},
    {id:"visa-application",name:"Visa Application Form",description:"Completed German national visa application form",category:"Legal Documents",cost:"\u20AC75 visa fee",time:"1 day",priority:"urgent",required:true,notes:"Available at German embassy/consulate website"},
    {id:"declaration-authenticity",name:"Declaration of Authenticity",description:"Signed declaration that all documents are authentic",category:"Legal Documents",cost:"\u20AC0",time:"1 day",priority:"high",required:true,notes:"Usually provided by embassy"},
    {id:"residence-permit",name:"Residence Permit Application",description:"Application for residence permit (after arrival)",category:"Legal Documents",cost:"\u20AC100",time:"8-12 weeks",priority:"medium",required:true,notes:"Applied for after arrival in Germany"},
    {id:"housing-agreement",name:"Housing Contract/Confirmation",description:"Proof of accommodation in Germany (rental contract or confirmation)",category:"Legal Documents",cost:"\u20AC400-800/month",time:"2-8 weeks",priority:"high",required:true,notes:"Required for residence registration (Anmeldung)"},
    {id:"anmeldung",name:"Anmeldung (Registration Confirmation)",description:"Registration with local authorities after arrival",category:"Legal Documents",cost:"\u20AC0",time:"1-4 weeks",priority:"high",required:true,notes:"Must be done within 14 days of arrival"},
    {id:"proof-of-address",name:"Proof of Address in Home Country",description:"Utility bill or official document showing current address",category:"Legal Documents",cost:"\u20AC0-10",time:"1 week",priority:"medium",required:true,notes:"Must be recent (within 3 months)"},
    {id:"consent-minors",name:"Parental Consent Letter (if under 18)",description:"Notarized parental consent for applicants under 18",category:"Legal Documents",cost:"\u20AC30-80",time:"1-2 weeks",priority:"urgent",required:false,notes:"Required for minors traveling alone"}
];

const categories = ["Personal Documents","Educational Documents","Financial Documents","Professional Documents","Medical Documents","Legal Documents"];

let completedDocs = new Set();

// Populate nationality dropdown
const natSelect = document.getElementById('nationality');
nationalities.forEach(n => {
    const opt = document.createElement('option');
    opt.value = n; opt.textContent = n;
    natSelect.appendChild(opt);
});

// Enable generate button when all required fields filled
const requiredFields = ['nationality','dc-sector','education','visaType','familyStatus','location','budget'];
requiredFields.forEach(id => {
    document.getElementById(id).addEventListener('change', checkFormValid);
    document.getElementById(id).addEventListener('input', checkFormValid);
});

function checkFormValid() {
    const allFilled = requiredFields.every(id => document.getElementById(id).value.trim() !== '');
    document.getElementById('btn-generate').disabled = !allFilled;
}

function generateChecklist() {
    const familyStatus = document.getElementById('familyStatus').value;
    const education = document.getElementById('education').value;
    const sector = document.getElementById('dc-sector').value;

    // Filter documents based on user profile
    let docs = allDocuments.filter(doc => {
        // Always include required docs
        if (doc.required) return true;
        // Family-related docs
        if (doc.id === 'marriage-certificate' && (familyStatus === 'couple' || familyStatus === 'children')) return true;
        if (doc.id === 'children-birth-certs' && familyStatus === 'children') return true;
        // Education-related
        if ((doc.id === 'bachelor-degree' || doc.id === 'university-transcripts') && (education === 'bachelors' || education === 'masters' || education === 'phd')) return true;
        if (doc.id === 'vocational-certs' && education === 'vocational') return true;
        // Sector-specific
        if (doc.id === 'portfolio' && (sector === 'it' || sector === 'engineering')) return true;
        // Generally useful optional docs
        if (doc.id === 'work-experience' || doc.id === 'income-tax' || doc.id === 'references') return true;
        if (doc.id === 'tb-test' || doc.id === 'medical-history') return true;
        if (doc.id === 'english-certificate') return true;
        if (doc.id === 'sponsorship-letter' || doc.id === 'scholarship-letter') return true;
        if (doc.id === 'name-change' || doc.id === 'consent-minors') return true;
        return false;
    });

    // Count urgent
    const urgentCount = docs.filter(d => d.priority === 'urgent').length;
    document.getElementById('stat-urgent').textContent = urgentCount;

    // Render categories
    const container = document.getElementById('checklist-categories');
    container.innerHTML = '';
    completedDocs = new Set();

    categories.forEach(cat => {
        const catDocs = docs.filter(d => d.category === cat);
        if (catDocs.length === 0) return;

        const requiredCount = catDocs.filter(d => d.required).length;
        const catHtml = `
            <div class="text-card-foreground shadow rounded-2xl azubi-bg-cream border-2 azubi-border-beige overflow-hidden mb-4">
                <button class="w-full flex items-center justify-between p-6 hover:bg-beige/30 transition-colors" onclick="toggleCategory(this)">
                    <div class="flex items-center gap-3">
                        <h3 class="text-lg font-bold azubi-text-green">${cat}</h3>
                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-xs azubi-bg-beige azubi-text-green">${catDocs.length} docs</span>
                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-xs bg-orange/10 azubi-text-orange">${requiredCount} required</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="azubi-cat-chevron text-muted-foreground transition-transform duration-200"><path d="m6 9 6 6 6-6"></path></svg>
                </button>
                <div class="azubi-cat-content px-6 pb-4 space-y-3">
                    ${catDocs.map(doc => renderDocument(doc)).join('')}
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', catHtml);
    });

    // Update total count
    updateProgress(docs.length);

    // Show results, hide how-it-works
    document.getElementById('checklist-results').classList.remove('hidden');
    document.getElementById('dc-how-it-works').classList.add('hidden');
    document.getElementById('btn-dc-reset').classList.remove('hidden');

    document.getElementById('checklist-results').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function renderDocument(doc) {
    const priorityClasses = {
        urgent: 'bg-orange/10 azubi-text-orange border-orange/30',
        high: 'bg-orange/10 azubi-text-orange border-orange/30',
        medium: 'azubi-bg-beige azubi-text-green azubi-border-beige',
        low: 'azubi-bg-cream azubi-text-green/70 azubi-border-green/20'
    };
    const pClass = priorityClasses[doc.priority] || priorityClasses.medium;

    return `
        <div class="bg-white rounded-xl border p-4 hover:border-orange/30 transition-colors" id="doc-${doc.id}">
            <div class="flex items-start gap-3">
                <label class="flex items-center justify-center w-5 h-5 mt-0.5 rounded border-2 border-primary cursor-pointer flex-shrink-0 hover:bg-primary/10 transition-colors">
                    <input type="checkbox" class="sr-only" onchange="toggleDoc('${doc.id}', this.checked)" />
                    <div class="hidden items-center justify-center w-full h-full bg-primary rounded-sm azubi-check-mark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </div>
                </label>
                <div class="flex-1 min-w-0">
                    <div class="flex items-start justify-between gap-2 mb-1">
                        <span class="font-semibold azubi-text-green azubi-doc-name">${doc.name}</span>
                        <div class="flex items-center gap-2 flex-shrink-0">
                            ${doc.required ? '<span class="inline-flex items-center rounded-full border px-2 py-0.5 text-[10px] font-semibold bg-orange/10 azubi-text-orange border-orange/30">Required</span>' : '<span class="inline-flex items-center rounded-full border px-2 py-0.5 text-[10px] font-semibold azubi-bg-beige text-green/70 azubi-border-beige">Optional</span>'}
                            <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-[10px] font-semibold ${pClass}">${doc.priority}</span>
                        </div>
                    </div>
                    <p class="text-sm text-green/70 mb-2">${doc.description}</p>
                    <div class="flex flex-wrap gap-3 text-xs text-muted-foreground">
                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10h12"></path><path d="M4 14h9"></path><path d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"></path></svg>${doc.cost}</span>
                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>${doc.time}</span>
                    </div>
                    ${doc.notes ? `<p class="text-xs text-orange/80 mt-2 flex items-start gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>${doc.notes}</p>` : ''}
                </div>
            </div>
        </div>
    `;
}

function toggleDoc(docId, checked) {
    const el = document.getElementById('doc-' + docId);
    const checkMark = el.querySelector('.azubi-check-mark');
    const docName = el.querySelector('.azubi-doc-name');

    if (checked) {
        completedDocs.add(docId);
        checkMark.classList.remove('hidden');
        checkMark.classList.add('flex');
        docName.classList.add('line-through', 'opacity-60');
    } else {
        completedDocs.delete(docId);
        checkMark.classList.add('hidden');
        checkMark.classList.remove('flex');
        docName.classList.remove('line-through', 'opacity-60');
    }

    const totalDocs = document.querySelectorAll('[id^="doc-"]').length;
    updateProgress(totalDocs);
}

function updateProgress(total) {
    const completed = completedDocs.size;
    const pct = total > 0 ? Math.round((completed / total) * 100) : 0;
    document.getElementById('progress-text').textContent = `${completed} of ${total} documents completed (${pct}%)`;
    document.getElementById('checklist-progress-bar').style.width = pct + '%';
}

function toggleCategory(btn) {
    const content = btn.nextElementSibling;
    const chevron = btn.querySelector('.azubi-cat-chevron');
    content.classList.toggle('hidden');
    chevron.classList.toggle('rotated');
}

function resetChecklist() {
    requiredFields.forEach(id => {
        const el = document.getElementById(id);
        if (el.tagName === 'SELECT') el.selectedIndex = 0;
        else el.value = '';
    });
    document.getElementById('startDate').value = '';
    completedDocs = new Set();
    document.getElementById('checklist-results').classList.add('hidden');
    document.getElementById('dc-how-it-works').classList.remove('hidden');
    document.getElementById('btn-dc-reset').classList.add('hidden');
    document.getElementById('btn-generate').disabled = true;
}

function toggleFaq(btn) {
    const content = btn.nextElementSibling;
    const chevron = btn.querySelector('.azubi-faq-chevron');
    content.classList.toggle('hidden');
    chevron.classList.toggle('rotated');
}
