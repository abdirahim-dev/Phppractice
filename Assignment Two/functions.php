<?php

// Mushaharka guud = mushaharka aasaasiga ah + gunno.
function calculateGrossSalary($basicSalary, $allowance)
{
    return $basicSalary + $allowance;
}

// Gunnada dheeraadka ah waxay ku xiran tahay mushaharka aasaasiga ah ee shaqaalaha.
function calculateBonus($basicSalary)
{
    if ($basicSalary >= 1000) {
        return $basicSalary * 0.10;
    } elseif ($basicSalary >= 500) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}

// Gunnada muddada shaqadu waxay ku xiran tahay tirada sannadaha shaqada.
function calculateServiceBenefit($basicSalary, $yearsOfService)
{
    if ($yearsOfService >= 5) {
        return $basicSalary * 0.08;
    } elseif ($yearsOfService >= 3) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}

// Gunnada shaqadu waxay ku xiran tahay inuu shaqaaluhu yahay waqti-buuxa ama waqti-dhiman.
function calculateEmploymentAllowance($basicSalary, $employmentType)
{
    if ($employmentType == "Full-Time") {
        return $basicSalary * 0.06;
    } elseif ($employmentType == "Part-Time") {
        return $basicSalary * 0.03;
    } else {
        return 0;
    }
}

// Wadarta gunnooyinka = gunno dheeraad ah + gunno sannadaha shaqada + gunno nooca shaqada.
function calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance)
{
    return $bonus + $serviceBenefit + $employmentAllowance;
}

// Mushaharka saafiga ah = mushaharka guud + wadarta gunnooyinka - lacagta laga jaray.
function calculateNetSalary($grossSalary, $totalBenefits, $deduction)
{
    return $grossSalary + $totalBenefits - $deduction;
}

// Mushaharka waxaa loo kala saaraa iyadoo la eegayo mushaharka saafiga ah ee la xisaabiyey.
function checkSalaryStatus($netSalary)
{
    if ($netSalary >= 1500) {
        return "High Salary";
    } elseif ($netSalary >= 800) {
        return "Medium Salary";
    } else {
        return "Low Salary";
    }
}

// Haddii aan bilaha la sheegin, waxaa la adeegsanayaa 12 bilood (hal sano).
function calculateAnnualSalary($netSalary, $months = 12)
{
    return $netSalary * $months;
}

?>