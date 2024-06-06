document.addEventListener("DOMContentLoaded", function () {
    const prevYearBtn = document.getElementById("prevYear");
    const nextYearBtn = document.getElementById("nextYear");
    const prevMonthBtn = document.getElementById("prevMonth");
    const nextMonthBtn = document.getElementById("nextMonth");
    const calendarTitle = document.getElementById("calendarTitle");
    const calendarBody = document.querySelector(".calendar-body");

    // Initial month and year
    let currentMonth = 5; // May (0-indexed for consistency with Date)
    let currentYear = 2024;

    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    // Modal elements
    const modal = document.getElementById("appointmentModal");
    const closeModal = document.querySelector(".close");
    const dentalDate = document.getElementById("dentalDate");
    const annualDate = document.getElementById("annualDate");

    // Function to open the modal
    function openModal(event) {
        const day = event.target.textContent;
        const date = `${day} ${months[currentMonth]} ${currentYear}`;

        dentalDate.innerHTML = `
            <h1>Dental Check-Up</h1><br>
            <form id="dentalForm" action="/appointment/form">
                <p>Date: ${date}</p>
                <p>Time: Dental 8:00-9:00 AM</p>
                <button type="button" onclick="applyAppointment('dentalForm')">Apply for Dental</button>
            </form>

            <form id="dentalForm1" action="/appointment/form1">
                <p>Date: ${date}</p>
                <p>Time: Dental 9:00-10:00 AM</p>
                <button type="button" onclick="applyAppointment('dentalForm1')">Apply for Dental</button>
            </form>

            <form id="dentalForm2" action="/appointment/form2">
                <p>Date: ${date}</p>
                <p>Time: Dental 10:00-11:00 AM</p>
                <button type="button" onclick="applyAppointment('dentalForm2')">Apply for Dental</button>
            </form>
            
            <form id="dentalForm3" action="/appointment/form3">
                <p>Date: ${date}</p>
                <p>Time: Dental 1:30-2:30 PM</p>
                <button type="button" onclick="applyAppointment('dentalForm3')">Apply for Dental</button>
            </form>
            
            <form id="dentalForm4" action="/appointment/form4">
                <p>Date: ${date}</p>
                <p>Time: Dental 2:30-3:30 PM</p>
                <button type="button" onclick="applyAppointment('dentalForm4')">Apply for Dental</button>
            </form>
            
            <form id="dentalForm5" action="/appointment/form5">
                <p>Date: ${date}</p>
                <p>Time: Dental 3:30-4:30 PM</p>
                <button type="button" onclick="applyAppointment('dentalForm5')">Apply for Dental</button>
            </form>
        `;

        annualDate.innerHTML = `
            <h1>Annual-Check-Up</h1><br>
            <form id="annualForm" action="/appointment/annual-form">
                <p>Date: ${date}</p>
                <p>Time: Annual 8:00-9:00 AM</p>
                <button type="button" onclick="applyAppointment('annualForm')">Apply for Annual</button>
            </form>
            
            <form id="annualForm1" action="/appointment/annual-form1">
                <p>Date: ${date}</p>
                <p>Time: Annual 9:00-10:00 AM</p>
                <button type="button" onclick="applyAppointment('annualForm1')">Apply for Annual</button>
            </form>
        
            <form id="annualForm2" action="/appointment/annual-form2">
                <p>Date: ${date}</p>
                <p>Time: Annual 10:00-11:00 AM</p>
                <button type="button" onclick="applyAppointment('annualForm2')">Apply for Annual</button>
            </form>
            
            <form id="annualForm3" action="/appointment/annual-form3">
                <p>Date: ${date}</p>
                <p>Time: Annual 1:30-2:30 PM</p>
                <button type="button" onclick="applyAppointment('annualForm3')">Apply for Annual</button>
            </form>
            
            <form id="annualForm4" action="/appointment/annual-form4">
                <p>Date: ${date}</p>
                <p>Time: Annual 2:30-3:30 PM</p>
                <button type="button" onclick="applyAppointment('annualForm4')">Apply for Annual</button>
            </form>
            
            <form id="annualForm5" action="/appointment/annual-form5">
                <p>Date: ${date}</p>
                <p>Time: Annual 3:30-4:30 PM</p>
                <button type="button" onclick="applyAppointment('annualForm5')">Apply for Annual</button>
            </form>
        `;

        console.log(`Opening modal for date: ${date}`);
        console.log('dentalDate.innerHTML:', dentalDate.innerHTML);
        console.log('annualDate.innerHTML:', annualDate.innerHTML);

        modal.style.display = "block";
    }

    // Function to close the modal
    function closeModalFunc() {
        modal.style.display = "none";
    }

    // Event listener to close the modal when the user clicks on the close button
    closeModal.addEventListener("click", closeModalFunc);

    // Event listener to close the modal when the user clicks outside of the modal content
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            closeModalFunc();
        }
    });

    function updateCalendar(monthIndex, year) {
        calendarTitle.textContent = `${months[monthIndex]} ${year}`;
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

            // Add functionality
            cell.addEventListener("click", openModal);

            calendarBody.appendChild(cell);
        }
    }

    // Event listeners for navigation buttons
    prevYearBtn.addEventListener("click", () => {
        currentYear--;
        updateCalendar(currentMonth, currentYear);
    });

    nextYearBtn.addEventListener("click", () => {
        currentYear++;
        updateCalendar(currentMonth, currentYear);
    });

    prevMonthBtn.addEventListener("click", () => {
        currentMonth = (currentMonth - 1 + months.length) % months.length;
        if (currentMonth === 11) currentYear--;
        updateCalendar(currentMonth, currentYear);
    });

    nextMonthBtn.addEventListener("click", () => {
        currentMonth = (currentMonth + 1) % months.length;
        if (currentMonth === 0) currentYear++;
        updateCalendar(currentMonth, currentYear);
    });

    // Initial calendar setup
    updateCalendar(currentMonth, currentYear);

    window.applyAppointment = function applyAppointment(formId) {
        document.getElementById(formId).submit();
    };
});
