<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interactive Calendar</title>
    <link rel="stylesheet" href="calendar.css">
</head>
<body>
    <div class="calendar">
        <div class="calendar-header">
            <button id="prevMonth">&lt;</button>
            <h2 id="monthYear">January 2024</h2>
            <button id="nextMonth">&gt;</button>
        </div>
        <div class="calendar-body">
            <!-- Days will be generated here -->
        </div>
    </div>

    <script>
        const prevMonthBtn = document.getElementById("prevMonth");
        const nextMonthBtn = document.getElementById("nextMonth");
        const calendarHeader = document.getElementById("monthYear");
        const calendarBody = document.querySelector(".calendar-body");
        
        let currentDate = new Date();
        currentDate.setDate(1); // Set to the first day of the current month

        function daysInMonth(year, month) {
            return new Date(year, month + 1, 0).getDate();
        }

        function updateCalendar(year, month) {
            calendarHeader.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;
            calendarBody.innerHTML = '<div class="calendar-cell">Mon</div><div class="calendar-cell">Tue</div><div class="calendar-cell">Wed</div><div class="calendar-cell">Thu</div><div class="calendar-cell">Fri</div><div class="calendar-cell">Sat</div><div class="calendar-cell">Sun</div>';

            let firstDayOfMonth = new Date(year, month).getDay();
            firstDayOfMonth = firstDayOfMonth === 0 ? 7 : firstDayOfMonth; // Adjust for Sunday (0 in JS) to be 7
            
            // Add blank days to align the first day of the month
            for (let i = 1; i < firstDayOfMonth; i++) {
                const blankCell = document.createElement("div");
                blankCell.classList.add("calendar-cell");
                calendarBody.appendChild(blankCell);
            }

            // Add days of the month
            const days = daysInMonth(year, month);
            for (let i = 1; i <= days; i++) {
                const cell = document.createElement("div");
                cell.classList.add("calendar-cell");
                // Calculate day of the week
                const dayOfWeek = new Date(year, month, i).getDay();
                if (dayOfWeek === 0 || dayOfWeek === 6) { // Sunday or Saturday
                    cell.classList.add("weekend");
                }
                cell.textContent = i;
                calendarBody.appendChild(cell);
            }
        }

        prevMonthBtn.addEventListener("click", () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendar(currentDate.getFullYear(), currentDate.getMonth());
        });

        nextMonthBtn.addEventListener("click", () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendar(currentDate.getFullYear(), currentDate.getMonth());
        });

        // Initial calendar setup
        updateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    </script>
</body>
</html>
