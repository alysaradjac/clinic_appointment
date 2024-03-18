<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Calendar with Accordion</title>
<link rel="stylesheet" href="calendar.css">
</head>
<body>

<div class="calendar">
  <div class="calendar-header">
    <button id="prevMonth">&lt;</button>
    <h2>January 2024</h2>
    <button id="nextMonth">&gt;</button>
  </div>
  <div class="calendar-body">
    <div class="calendar-cell">Mon</div>
    <div class="calendar-cell">Tue</div>
    <div class="calendar-cell">Wed</div>
    <div class="calendar-cell">Thu</div>
    <div class="calendar-cell">Fri</div>
    <div class="calendar-cell">Sat</div>
    <div class="calendar-cell">Sun</div>
    <!-- Days will be added dynamically here -->
    <div class="calendar-cell">1</div>
    <div class="calendar-cell">2</div>
    <div class="calendar-cell">3</div>
    <div class="calendar-cell">4</div>
    <div class="calendar-cell">5</div>
    <div class="calendar-cell">6</div>
    <div class="calendar-cell">7</div>
    <div class="calendar-cell">8</div>
    <div class="calendar-cell">9</div>
    <div class="calendar-cell">10</div>
    <!-- End of Days -->
  </div>
</div>

<script>
  const prevMonthBtn = document.getElementById("prevMonth");
  const nextMonthBtn = document.getElementById("nextMonth");
  const calendarHeader = document.querySelector(".calendar-header h2");
  const calendarBody = document.querySelector(".calendar-body");

  // Initial month and year
  let currentMonth = 0; // January
  const months = ["January", "February", "March", "April"];

  // Update calendar with the given month index
  function updateCalendar(monthIndex) {
    calendarHeader.textContent = months[monthIndex] + " 2024";
    // Here you can dynamically generate days based on monthIndex
    // For simplicity, let's just clear the current days and redraw them
    calendarBody.innerHTML = "";
    const daysInMonth = 31; // Assuming all months have 31 days
    const daysOfWeek = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

    // Add days of the week
    daysOfWeek.forEach(day => {
      const cell = document.createElement("div");
      cell.classList.add("calendar-cell");
      cell.textContent = day;
      calendarBody.appendChild(cell);
    });

    for (let i = 1; i <= daysInMonth; i++) {
      const cell = document.createElement("div");
      cell.classList.add("calendar-cell");
      cell.textContent = i;

      // Add accordion functionality
      const panel = document.createElement("div");
      panel.classList.add("panel");
      panel.textContent = "Time:     Dental     8:00-9:00AM     -     Annual:     8:00-6:00PM";

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
</script>

</body>
</html>
