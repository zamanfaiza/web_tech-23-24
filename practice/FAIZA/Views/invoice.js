document.addEventListener("DOMContentLoaded", function () {
  calculateTotalIncome();
});

function calculateTotalIncome() {
  const incomeCells = document.querySelectorAll(".income"); // Get all cells with class "income"
  let totalIncome = 0;

  incomeCells.forEach((cell) => {
    const incomeString = cell.textContent.replace("$", "").replace(",", ""); // Remove dollar sign and commas
    const income = parseFloat(incomeString);
    if (!isNaN(income)) {
      totalIncome += income; // Sum up all valid income entries
    }
  });

  displayTotalIncome(totalIncome);
}

function displayTotalIncome(total) {
  const totalDisplay = document.getElementById("total-income");
  totalDisplay.textContent = `Total Income: $${total.toLocaleString()}`;
}
