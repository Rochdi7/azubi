// ── City cost data (from DAAD / Destatis 2026-2027) ──
const cityData = {
    munich: {
        name: 'Munich', tier: 'Most Expensive',
        description: 'Capital of Bavaria, highest living costs in Germany, strong job market, excellent quality of life',
        accommodation: { dormitory: [350,500], shared: [500,800], studio: [800,1200], apartment: [1200,1800] },
        food: { budget: [180,220], moderate: [250,320], comfortable: [350,450] },
        fixed: { transportation: 49, insurance: 120, utilities: 150, phone: 30 },
        misc: { budget: [50,80], moderate: [100,150], comfortable: [180,250] }
    },
    frankfurt: {
        name: 'Frankfurt', tier: 'Most Expensive',
        description: 'Financial hub, international atmosphere, high salaries, expensive housing',
        accommodation: { dormitory: [320,480], shared: [480,750], studio: [750,1150], apartment: [1100,1700] },
        food: { budget: [170,210], moderate: [240,310], comfortable: [330,430] },
        fixed: { transportation: 51, insurance: 120, utilities: 140, phone: 30 },
        misc: { budget: [50,75], moderate: [95,140], comfortable: [170,240] }
    },
    hamburg: {
        name: 'Hamburg', tier: 'High Cost',
        description: 'Port city, second-largest in Germany, vibrant culture, good job opportunities',
        accommodation: { dormitory: [300,450], shared: [450,700], studio: [700,1100], apartment: [1000,1500] },
        food: { budget: [160,200], moderate: [230,290], comfortable: [320,410] },
        fixed: { transportation: 39, insurance: 120, utilities: 135, phone: 30 },
        misc: { budget: [45,70], moderate: [90,130], comfortable: [160,230] }
    },
    stuttgart: {
        name: 'Stuttgart', tier: 'High Cost',
        description: 'Automotive industry hub (Mercedes, Porsche), strong economy, hilly landscape',
        accommodation: { dormitory: [290,430], shared: [440,680], studio: [680,1050], apartment: [950,1450] },
        food: { budget: [165,205], moderate: [235,295], comfortable: [325,415] },
        fixed: { transportation: 43, insurance: 120, utilities: 130, phone: 30 },
        misc: { budget: [45,70], moderate: [88,128], comfortable: [155,225] }
    },
    cologne: {
        name: 'Cologne', tier: 'High Cost',
        description: 'Cultural center, carnival city, media industry, cathedral landmark',
        accommodation: { dormitory: [280,420], shared: [420,650], studio: [650,1000], apartment: [900,1400] },
        food: { budget: [160,200], moderate: [225,285], comfortable: [315,405] },
        fixed: { transportation: 38, insurance: 120, utilities: 125, phone: 30 },
        misc: { budget: [45,68], moderate: [85,125], comfortable: [150,220] }
    },
    berlin: {
        name: 'Berlin', tier: 'Moderate Cost',
        description: 'Capital city, startup hub, diverse culture, improving but still moderate costs',
        accommodation: { dormitory: [250,400], shared: [400,650], studio: [650,950], apartment: [900,1400] },
        food: { budget: [150,190], moderate: [210,270], comfortable: [300,390] },
        fixed: { transportation: 35, insurance: 120, utilities: 120, phone: 30 },
        misc: { budget: [40,65], moderate: [80,120], comfortable: [145,210] }
    },
    dusseldorf: {
        name: 'Düsseldorf', tier: 'Moderate Cost',
        description: 'Fashion and art hub, Japanese community, Rhine river, business center',
        accommodation: { dormitory: [270,410], shared: [410,630], studio: [630,980], apartment: [880,1350] },
        food: { budget: [155,195], moderate: [220,280], comfortable: [310,400] },
        fixed: { transportation: 37, insurance: 120, utilities: 125, phone: 30 },
        misc: { budget: [42,66], moderate: [82,122], comfortable: [148,215] }
    },
    hannover: {
        name: 'Hannover', tier: 'Moderate Cost',
        description: 'Central location, trade fair city, good transport connections, affordable living',
        accommodation: { dormitory: [240,380], shared: [380,590], studio: [590,910], apartment: [820,1280] },
        food: { budget: [145,185], moderate: [205,265], comfortable: [290,380] },
        fixed: { transportation: 33, insurance: 120, utilities: 115, phone: 30 },
        misc: { budget: [38,62], moderate: [75,115], comfortable: [138,200] }
    },
    nuremberg: {
        name: 'Nuremberg', tier: 'Moderate Cost',
        description: 'Bavarian city, historic old town, technology hub, Christmas market famous',
        accommodation: { dormitory: [245,385], shared: [385,600], studio: [600,920], apartment: [830,1300] },
        food: { budget: [148,188], moderate: [208,268], comfortable: [295,385] },
        fixed: { transportation: 36, insurance: 120, utilities: 118, phone: 30 },
        misc: { budget: [40,64], moderate: [78,118], comfortable: [142,205] }
    },
    essen: {
        name: 'Essen', tier: 'Moderate Cost',
        description: 'Ruhr area, industrial history, green capital, affordable and accessible',
        accommodation: { dormitory: [230,370], shared: [370,580], studio: [580,890], apartment: [800,1250] },
        food: { budget: [142,182], moderate: [200,260], comfortable: [285,375] },
        fixed: { transportation: 32, insurance: 120, utilities: 112, phone: 30 },
        misc: { budget: [38,60], moderate: [73,113], comfortable: [135,198] }
    },
    leipzig: {
        name: 'Leipzig', tier: 'Most Affordable',
        description: 'Growing cultural scene, startup-friendly, affordable housing, student-popular',
        accommodation: { dormitory: [200,330], shared: [330,520], studio: [520,800], apartment: [720,1150] },
        food: { budget: [135,175], moderate: [190,250], comfortable: [270,360] },
        fixed: { transportation: 30, insurance: 120, utilities: 105, phone: 30 },
        misc: { budget: [35,58], moderate: [68,108], comfortable: [128,190] }
    },
    dresden: {
        name: 'Dresden', tier: 'Most Affordable',
        description: 'Baroque architecture, Elbe river, technology sector, very affordable',
        accommodation: { dormitory: [190,320], shared: [320,510], studio: [510,780], apartment: [700,1120] },
        food: { budget: [130,170], moderate: [185,245], comfortable: [265,355] },
        fixed: { transportation: 28, insurance: 120, utilities: 100, phone: 30 },
        misc: { budget: [33,56], moderate: [65,105], comfortable: [125,185] }
    },
    bochum: {
        name: 'Bochum', tier: 'Most Affordable',
        description: 'Ruhr University, industrial heritage, most affordable major city, student-friendly',
        accommodation: { dormitory: [180,310], shared: [310,490], studio: [490,760], apartment: [680,1100] },
        food: { budget: [128,168], moderate: [180,240], comfortable: [260,350] },
        fixed: { transportation: 29, insurance: 120, utilities: 98, phone: 30 },
        misc: { budget: [32,55], moderate: [63,103], comfortable: [122,182] }
    },
    chemnitz: {
        name: 'Chemnitz', tier: 'Most Affordable',
        description: 'Saxony city, technology university, extremely affordable, industrial revival',
        accommodation: { dormitory: [175,300], shared: [300,480], studio: [480,740], apartment: [660,1080] },
        food: { budget: [125,165], moderate: [175,235], comfortable: [255,345] },
        fixed: { transportation: 27, insurance: 120, utilities: 95, phone: 30 },
        misc: { budget: [30,53], moderate: [60,100], comfortable: [118,178] }
    },
    erfurt: {
        name: 'Erfurt', tier: 'Most Affordable',
        description: 'Thuringia capital, medieval architecture, affordable living, central Germany location',
        accommodation: { dormitory: [185,315], shared: [315,500], studio: [500,770], apartment: [690,1110] },
        food: { budget: [132,172], moderate: [188,248], comfortable: [268,358] },
        fixed: { transportation: 31, insurance: 120, utilities: 102, phone: 30 },
        misc: { budget: [34,57], moderate: [67,107], comfortable: [127,187] }
    }
};

// ── Sector stipend data ──
const sectorStipends = {
    it: 1250, healthcare: 1225, engineering: 1150, construction: 1100,
    business: 1050, logistics: 1000, other: 1000, hospitality: 950, retail: 900
};

// ── Cost category colors ──
const categoryColors = {
    accommodation: '#F4991A',
    food: '#344F1F',
    transportation: '#8B7355',
    insurance: '#D4841A',
    utilities: '#5A7A3A',
    phone: '#A69070',
    miscellaneous: '#C4B090'
};

// ── DOM refs ──
const cityEl = document.getElementById('city');
const accommodationEl = document.getElementById('accommodation');
const lifestyleEl = document.getElementById('lifestyle');
const sectorEl = document.getElementById('sector');
const dependentEl = document.getElementById('includeDependent');
const btnCalc = document.getElementById('btn-calculate');
const btnReset = document.getElementById('btn-reset');

// ── Update city description on change ──
cityEl.addEventListener('change', updateButtonState);
accommodationEl.addEventListener('change', updateButtonState);
lifestyleEl.addEventListener('change', updateButtonState);

cityEl.addEventListener('change', function() {
    const desc = document.getElementById('city-description');
    if (this.value && cityData[this.value]) {
        desc.textContent = cityData[this.value].description;
    } else {
        desc.textContent = '';
    }
});

function updateButtonState() {
    btnCalc.disabled = !(cityEl.value && accommodationEl.value && lifestyleEl.value);
}

// ── Helper: average of range ──
function avg(range) {
    return Math.round((range[0] + range[1]) / 2);
}

// ── Calculate total cost for a city/accommodation/lifestyle combo ──
function getCosts(cityId, accom, life) {
    const c = cityData[cityId];
    const accommodation = avg(c.accommodation[accom]);
    const food = avg(c.food[life]);
    const transportation = c.fixed.transportation;
    const insurance = c.fixed.insurance;
    const utilities = c.fixed.utilities;
    const phone = c.fixed.phone;
    const miscellaneous = avg(c.misc[life]);

    return { accommodation, food, transportation, insurance, utilities, phone, miscellaneous };
}

function totalOf(costs) {
    return Object.values(costs).reduce((a, b) => a + b, 0);
}

// ── Main calculation ──
function calculateCosts() {
    const cityId = cityEl.value;
    const accom = accommodationEl.value;
    const life = lifestyleEl.value;
    const sectorId = sectorEl.value;
    const hasDependent = dependentEl.checked;

    if (!cityId || !accom || !life) return;

    const city = cityData[cityId];
    const costs = getCosts(cityId, accom, life);
    let total = totalOf(costs);
    const stipend = sectorStipends[sectorId];

    if (hasDependent) total = Math.round(total * 1.4);

    const balance = stipend - total;
    const annualBalance = balance * 12;
    const annualCost = total * 12;

    // Affordability level
    let affordability, affordColor;
    if (balance >= 200) { affordability = 'Comfortable'; affordColor = 'text-green'; }
    else if (balance >= 50) { affordability = 'Manageable'; affordColor = 'text-green'; }
    else if (balance >= -100) { affordability = 'Tight Budget'; affordColor = 'text-orange'; }
    else { affordability = 'Difficult'; affordColor = 'text-red-500'; }

    // Subtitle
    document.getElementById('results-subtitle').textContent =
        city.name + ' \u2022 ' + accom.charAt(0).toUpperCase() + accom.slice(1) + ' \u2022 ' + life.charAt(0).toUpperCase() + life.slice(1) + (hasDependent ? ' \u2022 With Dependent' : '');

    // Summary cards
    document.getElementById('result-total').textContent = '\u20AC' + total.toLocaleString() + '/mo';
    document.getElementById('result-stipend').textContent = '\u20AC' + stipend.toLocaleString() + '/mo';

    const balanceEl = document.getElementById('result-balance');
    balanceEl.textContent = (balance >= 0 ? '+' : '') + '\u20AC' + balance.toLocaleString() + '/mo';
    balanceEl.className = 'text-xl font-bold ' + (balance >= 0 ? 'text-green' : 'text-orange');

    const affordEl = document.getElementById('result-affordability');
    affordEl.textContent = affordability;
    affordEl.className = 'text-xs font-semibold ' + affordColor;

    const cardBalance = document.getElementById('card-balance');
    cardBalance.className = 'rounded-xl border bg-white p-4 flex items-start gap-3 ' + (balance >= 0 ? 'border-green/20' : 'border-orange/20');

    const balanceIconBg = document.getElementById('balance-icon-bg');
    balanceIconBg.className = 'p-2 rounded-lg flex-shrink-0 ' + (balance >= 0 ? 'bg-green/10' : 'bg-orange/10');

    const balanceIcon = document.getElementById('balance-icon');
    balanceIcon.className = balance >= 0 ? 'text-green' : 'text-orange';

    // Annual
    const annualEl = document.getElementById('result-annual');
    annualEl.textContent = (annualBalance >= 0 ? '+' : '') + '\u20AC' + annualBalance.toLocaleString();
    annualEl.className = 'text-xl font-bold ' + (annualBalance >= 0 ? 'text-green' : 'text-orange');
    document.getElementById('result-annual-cost').textContent = '\u20AC' + annualCost.toLocaleString();

    // Cost breakdown bars
    const breakdownEl = document.getElementById('cost-breakdown');
    const maxCost = Math.max(...Object.values(costs));
    const categories = [
        { key: 'accommodation', label: 'Accommodation', icon: '\uD83C\uDFE0' },
        { key: 'food', label: 'Food & Groceries', icon: '\uD83C\uDF5E' },
        { key: 'transportation', label: 'Transportation', icon: '\uD83D\uDE8C' },
        { key: 'insurance', label: 'Health Insurance', icon: '\uD83C\uDFE5' },
        { key: 'utilities', label: 'Utilities', icon: '\u26A1' },
        { key: 'phone', label: 'Phone & Internet', icon: '\uD83D\uDCF1' },
        { key: 'miscellaneous', label: 'Miscellaneous', icon: '\uD83C\uDFAD' }
    ];

    let breakdownHTML = '';
    const actualCosts = hasDependent ? {} : costs;
    for (const cat of categories) {
        const val = hasDependent ? Math.round(costs[cat.key] * 1.4) : costs[cat.key];
        const pct = Math.round((costs[cat.key] / maxCost) * 100);
        const color = categoryColors[cat.key];
        breakdownHTML += `
            <div class="rounded-xl border bg-white p-4">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-secondary">${cat.icon} ${cat.label}</span>
                    <span class="text-sm font-bold text-secondary">\u20AC${val.toLocaleString()}</span>
                </div>
                <div class="w-full bg-beige rounded-full h-3">
                    <div class="cost-bar" style="width: ${pct}%; background-color: ${color};"></div>
                </div>
            </div>`;
    }
    breakdownEl.innerHTML = breakdownHTML;

    // Financial alert
    const alertEl = document.getElementById('financial-alert');
    const alertText = document.getElementById('financial-alert-text');
    if (balance < 0) {
        alertEl.classList.remove('hidden');
        alertEl.className = 'rounded-xl p-4 mb-6 flex items-start gap-3 bg-orange/10 border border-orange/20 text-orange';
        alertText.innerHTML = '<p class="font-semibold mb-1">Your stipend doesn\'t fully cover living costs</p><p class="text-sm">You have a monthly deficit of <strong>\u20AC' + Math.abs(balance) + '</strong>. Consider part-time work, a more affordable city, or cheaper accommodation to balance your budget.</p>';
    } else {
        alertEl.classList.add('hidden');
    }

    // Part-time work impact
    const partTimeData = [
        { hours: 10, rate: 13 },
        { hours: 15, rate: 14 },
        { hours: 20, rate: 15 }
    ];
    const ptContainer = document.getElementById('parttime-cards');
    ptContainer.innerHTML = partTimeData.map(pt => {
        const earnings = Math.round(pt.hours * pt.rate * 4.33);
        const newBalance = balance + earnings;
        return `
            <div class="rounded-xl border bg-white p-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="p-1.5 rounded-lg bg-green/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <span class="text-sm font-semibold text-green">${pt.hours}h/week @ \u20AC${pt.rate}/hr</span>
                </div>
                <p class="text-lg font-bold text-secondary mb-1">+\u20AC${earnings.toLocaleString()}/mo</p>
                <p class="text-xs ${newBalance >= 0 ? 'text-green' : 'text-orange'}">New balance: ${newBalance >= 0 ? '+' : ''}\u20AC${newBalance.toLocaleString()}/mo</p>
            </div>`;
    }).join('');

    // Cheaper city alternatives
    const altSection = document.getElementById('alternatives-section');
    const altContainer = document.getElementById('alternatives-cards');
    const currentTotal = total;

    // Sort cities by total cost and find cheaper ones
    const cityOrder = Object.keys(cityData);
    const cityCosts = cityOrder.map(id => ({
        id,
        name: cityData[id].name,
        tier: cityData[id].tier,
        total: totalOf(getCosts(id, accom, life))
    })).sort((a, b) => a.total - b.total);

    const cheaper = cityCosts.filter(c => c.id !== cityId && c.total < currentTotal).slice(0, 3);

    if (cheaper.length > 0) {
        altSection.classList.remove('hidden');
        altContainer.innerHTML = cheaper.map(alt => {
            const savings = (hasDependent ? Math.round(currentTotal - alt.total * 1.4) : currentTotal - alt.total);
            const altTotal = hasDependent ? Math.round(alt.total * 1.4) : alt.total;
            return `
                <div class="rounded-xl border bg-white p-4">
                    <h4 class="font-bold text-green mb-1">${alt.name}</h4>
                    <p class="text-xs text-muted-foreground mb-3">${alt.tier}</p>
                    <p class="text-lg font-bold text-secondary mb-1">\u20AC${altTotal.toLocaleString()}/mo</p>
                    <p class="text-xs text-green font-semibold">Save \u20AC${savings.toLocaleString()}/mo vs ${city.name}</p>
                </div>`;
        }).join('');
    } else {
        altSection.classList.add('hidden');
    }

    // Show results, hide how-it-works
    document.getElementById('results-section').classList.remove('hidden');
    document.getElementById('how-it-works').classList.add('hidden');
    btnReset.classList.remove('hidden');
    document.getElementById('results-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// ── Reset ──
function resetCalculator() {
    cityEl.value = '';
    accommodationEl.value = '';
    lifestyleEl.value = '';
    sectorEl.value = 'it';
    dependentEl.checked = false;
    document.getElementById('city-description').textContent = '';

    document.getElementById('results-section').classList.add('hidden');
    document.getElementById('how-it-works').classList.remove('hidden');
    btnReset.classList.add('hidden');
    btnCalc.disabled = true;
}

// ── FAQ toggle ──
function toggleFaq(btn) {
    const content = btn.nextElementSibling;
    const chevron = btn.querySelector('.faq-chevron');
    content.classList.toggle('hidden');
    chevron.classList.toggle('rotated');
}
