// Sector stipend data
const sectorData = {
    'healthcare':    { stipend: '950-1200', postSalary: 2800 },
    'it':            { stipend: '1000-1300', postSalary: 3200 },
    'engineering':   { stipend: '1000-1350', postSalary: 3000 },
    'hospitality':   { stipend: '850-1050', postSalary: 2400 },
    'logistics':     { stipend: '900-1100', postSalary: 2600 },
    'sales':         { stipend: '850-1050', postSalary: 2500 },
    'automotive':    { stipend: '950-1200', postSalary: 2800 },
    'construction':  { stipend: '900-1150', postSalary: 2700 }
};

// DOM refs
const sectorEl = document.getElementById('sector');
const durationEl = document.getElementById('trainingDuration');
const initialEl = document.getElementById('initialCosts');
const expensesEl = document.getElementById('monthlyExpenses');
const germanEl = document.getElementById('germanLevel');
const btnCalc = document.getElementById('btn-calculate');
const btnReset = document.getElementById('btn-reset');

// Update displays on slider change
durationEl.addEventListener('input', () => {
    document.getElementById('duration-display').textContent = durationEl.value;
});
initialEl.addEventListener('input', () => {
    document.getElementById('initial-display').textContent = parseInt(initialEl.value).toLocaleString();
});
expensesEl.addEventListener('input', () => {
    document.getElementById('expenses-display').textContent = parseInt(expensesEl.value).toLocaleString();
});

// Enable calculate button when sector is selected
sectorEl.addEventListener('change', () => {
    btnCalc.disabled = !sectorEl.value;
});

function calculateROI() {
    const sector = sectorEl.value;
    if (!sector) return;

    const data = sectorData[sector];
    const trainingDuration = parseFloat(durationEl.value);
    const monthlyExpenses = parseInt(expensesEl.value);
    const germanLevel = germanEl.value;

    // Parse average stipend
    const parts = data.stipend.split('-');
    const avgStipend = Math.floor((parseInt(parts[0]) + parseInt(parts[1])) / 2);

    // Calculate total stipend with 10% yearly increase
    let totalStipend = 0;
    for (let year = 1; year <= trainingDuration; year++) {
        totalStipend += 12 * Math.floor(avgStipend * (1 + (year - 1) * 0.1));
    }

    // Total expenses during training
    const totalExpenses = 12 * monthlyExpenses * trainingDuration;

    // Language course costs
    let langCost = 0;
    switch (germanLevel) {
        case 'none': langCost = 1500; break;
        case 'a1': langCost = 1000; break;
        case 'a2': langCost = 500; break;
        default: langCost = 0;
    }

    const initialInvestment = parseInt(initialEl.value) + langCost;
    const netPosition = totalStipend - totalExpenses - initialInvestment;

    // Post-training salary
    const startingSalary = data.postSalary;

    // 5-year earnings with 3% annual raise
    let fiveYearEarnings = 0;
    let salary = startingSalary;
    for (let y = 1; y <= 5; y++) {
        fiveYearEarnings += 12 * salary;
        salary *= 1.03;
    }

    // Time to ROI
    let timeToROI = '';
    if (netPosition >= 0) {
        timeToROI = 'During training';
    } else {
        const months = Math.ceil(Math.abs(netPosition) / startingSalary);
        timeToROI = months + ' months after training';
    }

    // Monthly balance during training
    const monthlyBalance = totalStipend / (12 * trainingDuration) - monthlyExpenses;

    // Display results
    document.getElementById('result-investment').textContent = '\u20AC' + initialInvestment.toLocaleString();
    document.getElementById('result-stipend').textContent = '\u20AC' + totalStipend.toLocaleString();

    const monthlyEl = document.getElementById('result-monthly');
    monthlyEl.textContent = (monthlyBalance >= 0 ? '+' : '') + '\u20AC' + Math.round(monthlyBalance).toLocaleString();
    monthlyEl.className = 'text-xl font-bold ' + (monthlyBalance >= 0 ? 'text-green' : 'text-orange');

    const afterEl = document.getElementById('result-after');
    afterEl.textContent = (netPosition >= 0 ? '+' : '') + '\u20AC' + netPosition.toLocaleString();
    afterEl.className = 'text-xl font-bold ' + (netPosition >= 0 ? 'text-green' : 'text-orange');

    document.getElementById('result-time').textContent = timeToROI;
    document.getElementById('result-salary').textContent = '\u20AC' + startingSalary.toLocaleString() + '/mo';
    document.getElementById('result-5year').textContent = '\u20AC' + Math.round(fiveYearEarnings).toLocaleString();

    // Show results, hide how-it-works
    document.getElementById('results-section').classList.remove('hidden');
    document.getElementById('how-it-works').classList.add('hidden');
    btnReset.classList.remove('hidden');

    // Scroll to results
    document.getElementById('results-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function resetCalculator() {
    sectorEl.value = '';
    durationEl.value = 3;
    initialEl.value = 14000;
    expensesEl.value = 750;
    germanEl.value = 'a1';

    document.getElementById('duration-display').textContent = '3';
    document.getElementById('initial-display').textContent = '14,000';
    document.getElementById('expenses-display').textContent = '750';

    document.getElementById('results-section').classList.add('hidden');
    document.getElementById('how-it-works').classList.remove('hidden');
    btnReset.classList.add('hidden');
    btnCalc.disabled = true;
}

function toggleFaq(btn) {
    const content = btn.nextElementSibling;
    const chevron = btn.querySelector('.faq-chevron');
    content.classList.toggle('hidden');
    chevron.classList.toggle('rotated');
}
