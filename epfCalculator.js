function calculateEPF() {
    // Get user inputs
    const basicSalary = parseFloat(document.getElementById("basicSalary").value);
    const currentAge = parseInt(document.getElementById("currentAge").value);
    const retirementAge = parseInt(document.getElementById("retirementAge").value);
    const currentBalance = parseFloat(document.getElementById("currentBalance").value);
    const employeeContribution = parseFloat(document.getElementById("employeeContribution").value) / 100;
    const employerContribution = parseFloat(document.getElementById("employerContribution").value) / 100;

    // Calculate remaining years until retirement
    const yearsToRetirement = retirementAge - currentAge;

    // Calculate the annual contributions by employee and employer
    const annualEmployeeContribution = 12 * basicSalary * employeeContribution;
    const annualEmployerContribution = 12 * basicSalary * employerContribution;

    // Calculate the total contributions for the remaining years (assuming no salary hike)
    const totalEmployeeContribution = annualEmployeeContribution * yearsToRetirement;
    const totalEmployerContribution = annualEmployerContribution * yearsToRetirement;

    // Calculate the final EPF balance at retirement
    const finalEPFBalance = currentBalance + totalEmployeeContribution + totalEmployerContribution;

    // Display the result
    document.getElementById("result").innerHTML = finalEPFBalance.toFixed(2);
}
