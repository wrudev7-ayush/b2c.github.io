const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {
    item.querySelector(".faq-question").addEventListener("click", () => {

        // close all except clicked one
        faqItems.forEach(i => {
            if (i !== item) i.classList.remove("open");
        });

        item.classList.toggle("open");
    });
});


document.addEventListener("DOMContentLoaded", function () {

    const scrollElements = document.querySelectorAll(".scroll-animate");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, {
        threshold: 0.5
    });

    scrollElements.forEach(el => observer.observe(el));
});



let activeField = null; 
// flight search list code 
const airports = [
  {
    city: "Dubai",
    airport: "Dubai International",
    code: "DXB",
    nearby: [
      { city: "Dubai Bus Station", airport: "Bus Terminal", code: "XNB", distance: "3 km" },
      { city: "Sharjah", airport: "Sharjah Intl", code: "SHJ", distance: "17 km" },
      { city: "Dubai Al Maktoum", airport: "Al Maktoum Intl", code: "DWC", distance: "45 km" }
    ]
  },
  { city: "Chennai", airport: "Chennai International", code: "MAA", nearby: [] },
  { city: "Mumbai", airport: "Chhatrapati Shivaji", code: "BOM", nearby: [] },
  { city: "Delhi", airport: "Indira Gandhi Intl", code: "DEL", nearby: [] },
  { city: "Hyderabad", airport: "Rajiv Gandhi Intl", code: "HYD", nearby: [] },
  { city: "Bengaluru", airport: "Kempegowda Intl", code: "BLR", nearby: [] }
];
// let activeField = null;

function openPopup(id, fieldType) {
  activeField = fieldType; 

  document.querySelectorAll(".popup-box").forEach(p => p.style.display = "none");
  document.getElementById(id).style.display = "block";

  document.querySelector(`#${id} input`).focus();
}


function showSuggestions(input, listId) {
  const query = input.value.toLowerCase();
  const list = document.getElementById(listId);
  list.innerHTML = "";

  if (query === "") return;

  const results = airports.filter(a =>
    a.city.toLowerCase().includes(query)
  );

  results.forEach(item => {

    let li = document.createElement("li");
    li.className = "suggest-item parent-item";

    let nearbyHTML = "";
    if (item.nearby && item.nearby.length > 0) {
      nearbyHTML = `
        <div class="nearby-info inside-parent">
          ${item.nearby.length} Nearby Airports found | within 200 km
        </div>
      `;
    }

    li.innerHTML = `
      <div class="suggest-left">
        <i class="fa-solid fa-plane-departure"></i>
        <div>
          <div class="city-name">${item.city}</div>
          <div class="airport-name">${item.airport}</div>
        </div>
      </div>
      <div class="airport-code">${item.code}</div>
      ${nearbyHTML}
    `;

    li.onclick = () => {
      if (activeField === "from") {
        document.getElementById("fromMain").innerText = item.city;
        document.getElementById("fromPopup").style.display = "none";
      }

      if (activeField === "to") {
        document.getElementById("toMain").innerText = item.city;
        document.getElementById("toPopup").style.display = "none";
      }
    };

    list.appendChild(li);

    // CHILD AIRPORTS
    if (item.nearby && item.nearby.length > 0) {
      item.nearby.forEach(n => {
        let nearLi = document.createElement("li");
        nearLi.className = "suggest-item child-item";

        nearLi.innerHTML = `
          <div class="suggest-left">
            <i class="fa-solid fa-plane-departure"></i>
            <div>
              <div class="city-name">${n.city}</div>
              <div class="airport-name">${n.distance} from ${item.city}</div>
            </div>
            </div>
            <div class="airport-code">${n.code}</div>
        `;

        nearLi.onclick = () => {
          if (activeField === "from") {
            document.getElementById("fromMain").innerText = n.city;
            document.getElementById("fromPopup").style.display = "none";
          }

          if (activeField === "to") {
            document.getElementById("toMain").innerText = n.city;
            document.getElementById("toPopup").style.display = "none";
          }
        };

        list.appendChild(nearLi);
      });
    }

  });
}



function swapValues() {
    let from = document.getElementById("fromMain").innerText;
    let to = document.getElementById("toMain").innerText;

    document.getElementById("fromMain").innerText = to;
    document.getElementById("toMain").innerText = from;
}

document.addEventListener("click", e => {
    if (!e.target.closest(".field-box") && !e.target.closest(".popup-box")) {
        document.querySelectorAll(".popup-box").forEach(p => p.style.display = "none");
    }
});



// multicity add another flights 

let flightCount = 1;
const maxFlights = 4;

document.getElementById("addMoreFlight").addEventListener("click", function (e) {
  e.preventDefault();

  if (flightCount >= maxFlights) {
    alert("You can only add up to 4 flights.");
    return;
  }

  flightCount++;

  let wrapper = document.getElementById("multiFlightWrapper");
  let firstRow = wrapper.querySelector(".flight-row");
  let newRow = firstRow.cloneNode(true);

  newRow.querySelector(".multiFlights").innerText = "flight" + flightCount;

  wrapper.appendChild(newRow);
});



// custom cursor code here 

  const cursor = document.querySelector(".cursor");
  const tail = document.querySelector(".cursor-tail");

  document.addEventListener("mousemove", mouseMove);

  function mouseMove(e) {
    gsap.set([cursor, tail], { opacity: 1 });

    const cursorPosition = {
      left: e.clientX,
      top: e.clientY
    };

    let mouseInTarget = false;

    const targetElements = document.querySelectorAll(".target");

    targetElements.forEach((targetEle, idx) => {
      const rect = targetEle.getBoundingClientRect();
      const triggerDistance = rect.width;

      // Target center position
      const targetPosition = {
        left: rect.left + rect.width / 2,
        top: rect.top + rect.width / 2
      };

      // Distance between mouse & target
      const distance = {
        adj: targetPosition.left - cursorPosition.left,
        opp: targetPosition.top - cursorPosition.top
      };

      // Hypotenuse (distance)
      const hypotenuse = Math.sqrt(
        distance.adj * distance.adj + distance.opp * distance.opp
      );

      // Angle
      const angle = Math.atan2(distance.adj, distance.opp);

      // If cursor enters target area
      if (hypotenuse < triggerDistance) {
        gsap.to(".cursor, .cursor-tail", {
          left: targetPosition.left - (Math.sin(angle) * hypotenuse) / 6,
          top: targetPosition.top - (Math.cos(angle) * hypotenuse) / 6,
          height: targetEle.clientHeight,
          width: targetEle.clientWidth,
          duration: 0.3
        });

        mouseInTarget = true;
      }
    });

    // Default cursor movement
    if (!mouseInTarget) {
      gsap.to(".cursor", {
        left: cursorPosition.left,
        top: cursorPosition.top,
        height: "12px",
        width: "12px",
        duration: 0.2
      });

      gsap.to(".cursor-tail", {
        left: cursorPosition.left,
        top: cursorPosition.top,
        height: "5px",
        width: "5px",
        duration: 0.5
      });
    }
  }


//   custom cusrsor code here 

  gsap.set(".cursor-dot", { scale: 0.1 });
    gsap.set(".cursor-outline", { scale: 0.5 });

    document.addEventListener("mousemove", mouseMove);

    let xCTo = gsap.quickTo(".cursor-outline", "left", { duration: 0.2 });
    let yCTo = gsap.quickTo(".cursor-outline", "top", { duration: 0.2 });

    let xDTo = gsap.quickTo(".cursor-dot", "left", { duration: 0.6 });
    let yDTo = gsap.quickTo(".cursor-dot", "top", { duration: 0.6 });

    let isVisible = false;

    function mouseMove(e) {
      if (!isVisible) {
        gsap.set(".cursor-outline, .cursor-dot", { opacity: 1 });
        isVisible = true;
      }

      xCTo(e.clientX);
      yCTo(e.clientY);
      xDTo(e.clientX);
      yDTo(e.clientY);
    }
