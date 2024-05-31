const prevMonthBtn = document.getElementById("prevMonth");
const nextMonthBtn = document.getElementById("nextMonth");
const calendarHeader = document.querySelector(".calendar-header h2");
const calendarBody = document.querySelector(".calendar-body");
// Initial month and year
let currentMonth = 0; // January
let currentYear = 2024; // Initial year

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

function updateCalendar(monthIndex, year) {
    calendarTitle.textContent = months[monthIndex] + " " + year;
    // Clear current days
    calendarBody.innerHTML = "";

    // Calculate days in month and first day of the month
    const daysInMonth = new Date(year, monthIndex + 1, 0).getDate();
    const firstDayOfMonth = new Date(year, monthIndex, 1).getDay();

    // Add days of the week
    const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
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

    // Add days of the month
    for (let i = 1; i <= daysInMonth; i++) {
        const cell = document.createElement("div");
        cell.classList.add("calendar-cell");
        cell.textContent = i;

        // Add functionality (example with an accordion)
        if (daysOfWeek[(i + firstDayOfMonth) % 7] === 'Sun' || daysOfWeek[(i + firstDayOfMonth) % 7] === 'Mon') {
            cell.classList.add("inactive");
        } else {
            const panel = document.createElement("div");
            panel.classList.add("panel");
            panel.innerHTML = `
            <form action="/appointment_form">
                <p>Time: Dental 8:00-9:00AM</p>
                <button class="button">Apply</button>
            </form>
            <form action="/appointment_form">
            <p>Annual 8:00-6:00PM</p>
            <button class="button">Apply</button>
            </form>
            `;
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
updateCalendar(currentMonth, currentYear);