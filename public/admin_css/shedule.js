const prevMonthBtn = document.getElementById("prevMonth");
const nextMonthBtn = document.getElementById("nextMonth");
const calendarHeader = document.querySelector(".calendar-header h2");
const calendarBody = document.querySelector(".calendar-body");
// Initial month and year
let currentMonth = 0; // January
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
// Update calendar with the given month index
function updateCalendar(monthIndex) {
  calendarHeader.textContent = months[monthIndex] + " 2024";
  // Here you can dynamically generate days based on monthIndex
  // For simplicity, let's just clear the current days and redraw them
  calendarBody.innerHTML = "";
  const daysInMonth = new Date(2024, monthIndex + 1, 0).getDate();
  const firstDayOfMonth = new Date(2024, monthIndex, 1).getDay(); // 0 for Sunday, 1 for Monday, ...
  const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']; // Modified order of days
  // Add days of the week
  daysOfWeek.forEach(day => {
    const cell = document.createElement("div");
    cell.classList.add("calendar-cell");
    cell.textContent = day;
    calendarBody.appendChild(cell);
  });
  // Add empty cells before the first day of the month
  for (let i = 0; i < firstDayOfMonth; i++) {
    const emptyCell = document.createElement("div");
    emptyCell.classList.add("calendar-cell");
    calendarBody.appendChild(emptyCell);
  }
  for (let i = 1; i <= daysInMonth; i++) {
    const cell = document.createElement("div");
    cell.classList.add("calendar-cell");
    cell.textContent = i;
    // Make Saturday and Sunday inactive
    if (cell.textContent === 'Sat' || cell.textContent === 'Sun') {
      cell.classList.add("inactive");
    } else {
      // Add accordion functionality
      const panel = document.createElement("div");
      panel.classList.add("panel");
      panel.innerHTML = `
      <form action="/admin_sched">
        <p>Time: Dental 8:00-9:00AM - Annual 8:00-6:00PM</p>
        <button type="submit" class="button">Apply</button>
      </form>
      `;
      // Add click event to show/hide accordion
      cell.addEventListener("click", function(event) {
        const panels = document.querySelectorAll(".panel");
        panels.forEach(panel => {
          if (panel !== event.currentTarget.querySelector(".panel")) {
            panel.style.display = "none";
          }
        });
        const panel = event.currentTarget.querySelector(".panel");
        panel.style.display = (panel.style.display === "block") ? "none" : "block";
      });
      cell.appendChild(panel);
    }
    calendarBody.appendChild(cell);
  }
}
// Event listeners for previous and next buttons
prevMonthBtn.addEventListener("click", () => {
  currentMonth = (currentMonth - 1 + months.length) % months.length;
  updateCalendar(currentMonth);
});
nextMonthBtn.addEventListener("click", () => {
  currentMonth = (currentMonth + 1) % months.length;
  updateCalendar(currentMonth);
});
// Initial calendar setup
updateCalendar(currentMonth);
