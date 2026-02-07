
  const currencyBtn = document.getElementById("currencyBtn");
  const dropdown = document.getElementById("currencyDropdown");
  const currentFlag = document.getElementById("currentFlag");
  const currentCurrency = document.getElementById("currentCurrency");

  currencyBtn.addEventListener("click", () => {
    dropdown.classList.toggle("show");
  });

  document.querySelectorAll(".currency-item").forEach(item => {
    item.addEventListener("click", () => {
      const flag = item.getAttribute("data-flag");
      const code = item.getAttribute("data-code");

      currentFlag.src = `https://flagcdn.com/w40/${flag}.png`;
      currentCurrency.textContent = code;

      dropdown.classList.remove("show");
    });
  });

  document.addEventListener("click", (e) => {
    if (!currencyBtn.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.classList.remove("show");
    }
  });
  


//   custom date and calender flight booking result start here 

 const boxes = document.querySelectorAll(".date-box");
  const flexibleBtn = document.getElementById("flexibleBtn");
  const calendarPopup = document.getElementById("calendarPopup");
  const closeCalendar = document.getElementById("closeCalendar");
  const monthTitle = document.getElementById("monthTitle");
  const calendarGrid = document.getElementById("calendarGrid");
  const prevMonth = document.getElementById("prevMonth");
  const nextMonth = document.getElementById("nextMonth");
  const blurOverlay = document.getElementById("blurOverlay");

  let currentMonth = new Date().getMonth();
  let currentYear = new Date().getFullYear();

  function formatDate(date) {
    return date.toLocaleDateString("en-IN", { day: "numeric", month: "short" });
  }

  function updateDates(centerDate) {
    boxes.forEach(box => {
      const offset = parseInt(box.dataset.offset);
      const newDate = new Date(centerDate);
      newDate.setDate(centerDate.getDate() + offset);
      box.querySelector(".day").innerText = formatDate(newDate);
    });
  }

  updateDates(new Date());

  boxes.forEach(box => {
    box.addEventListener("click", () => {
      boxes.forEach(b => b.classList.remove("active"));
      box.classList.add("active");
    });
  });

  flexibleBtn.addEventListener("click", () => {
    calendarPopup.classList.add("show");
    blurOverlay.classList.add("show");
    renderCalendar();
  });

  closeCalendar.addEventListener("click", closePopup);
  blurOverlay.addEventListener("click", closePopup);

  function closePopup() {
    calendarPopup.classList.remove("show");
    blurOverlay.classList.remove("show");
  }

  prevMonth.addEventListener("click", () => {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    renderCalendar();
  });

  nextMonth.addEventListener("click", () => {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    renderCalendar();
  });

  function renderCalendar() {
    const firstDay = new Date(currentYear, currentMonth, 1).getDay();
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

    monthTitle.innerText = new Date(currentYear, currentMonth)
      .toLocaleDateString("en-IN", { month: "short", year: "numeric" })
      .toUpperCase();

    calendarGrid.querySelectorAll(".calendar-date").forEach(el => el.remove());

    for (let i = 0; i < firstDay; i++) {
      calendarGrid.insertAdjacentHTML("beforeend", `<div class="calendar-date"></div>`);
    }

    for (let d = 1; d <= daysInMonth; d++) {
      calendarGrid.insertAdjacentHTML("beforeend", `
        <div class="calendar-date" onclick="selectCalendarDate(${d})">
          ${d}
          <span>₹5,530</span>
        </div>
      `);
    }
  }

  function selectCalendarDate(day) {
    const selected = new Date(currentYear, currentMonth, day);
    updateDates(selected);
    closePopup();
  }

  document.addEventListener("click", (e) => {
    if (!calendarPopup.contains(e.target) && 
        !flexibleBtn.contains(e.target)) {
      closePopup();
    }
  });

//   custom date and calender flight booking result end here 


// search result card script here 
// ================= PRICE ALERT =================
let priceAlerts = [true, true, true, true, true];

function togglePriceAlert(index) {
  priceAlerts[index] = !priceAlerts[index];
  console.log("Price alert toggled for:", index);
}

// ================= FLIGHT DETAILS TOGGLE =================
function toggleFlightDetails(index) {
  const cards = document.querySelectorAll(".flight-card");

  cards.forEach((card, i) => {
    const details = card.querySelector(".expanded-details");

    if (!details) return;

    if (i === index) {
      details.classList.toggle("show");   //  OPEN / CLOSE
    } else {
      details.classList.remove("show");   //  Close others
    }
  });
}

// ================= FILTER DROPDOWN TOGGLE =================
// function initializeFilters() {
//   const filterToggles = document.querySelectorAll('.filter-toggle');

//   filterToggles.forEach(toggle => {
//     toggle.addEventListener('click', function (e) {
//       e.preventDefault();

//       const target = this.getAttribute('data-bs-target');
//       const collapseElement = document.querySelector(target);

//       if (!collapseElement) return;

//       if (collapseElement.classList.contains("show")) {
//         collapseElement.classList.remove("show");  
//       } else {
//         collapseElement.classList.add("show");    
//       }

//       this.classList.toggle("active");
//     });
//   });
// }

// ================= PAGE LOAD =================
document.addEventListener('DOMContentLoaded', function () {
  initializeFilters();
});


// share button popup sections 

  document.querySelector(".action-btn-share").addEventListener("click", function () {
    var shareModal = new bootstrap.Modal(document.getElementById("shareModal"));
    shareModal.show();
  });

//   sort by button script 
