window.addEventListener("load", () => {
  console.log("All assets loaded, GSAP ready");

  /* ================= SAFETY ================= */
  if (typeof gsap === "undefined") return;
  if (typeof ScrollTrigger !== "undefined") {
    gsap.registerPlugin(ScrollTrigger);
  }

  /* ================= SMOOTH SCROLL ================= */
  if (typeof Lenis !== "undefined") {
    const lenis = new Lenis({
      duration: 1.2,
      easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smooth: true
    });

    const raf = time => {
      lenis.raf(time);
      requestAnimationFrame(raf);
    };
    requestAnimationFrame(raf);
  }

  /* ================= HERO LOAD ================= */
  gsap.timeline({ defaults: { ease: "power4.out" } })
    .from(".navbar", { y: -80, opacity: 0, duration: 1 })
    .from(".hero-title", { y: 80, opacity: 0, duration: 1 }, "-=0.4")
    .from(".features span", {
      y: 30,
      opacity: 0,
      stagger: 0.15,
      duration: 0.8
    }, "-=0.6")
    .from(".search-card", {
      y: 100,
      opacity: 0,
      scale: 0.95,
      duration: 1
    }, "-=0.5");

  /* ================= AIRPORT DATA (PARENT + CHILD) ================= */
  const airports = [
    {
      name: "Delhi, India",
      code: "DEL",
      children: [
        { name: "New Delhi", code: "DEL" },
        { name: "Ghaziabad", code: "GZB" },
        { name: "Noida", code: "NOI" },
        { name: "Haryana", code: "HR" }
      ]
    },
    {
      name: "Mumbai, India",
      code: "BOM",
      children: [
        { name: "Navi Mumbai", code: "NMI" },
        { name: "Thane", code: "THN" }
      ]
    },
    {
      name: "Bangalore, India",
      code: "BLR",
      children: [
        { name: "Whitefield", code: "WFD" },
        { name: "Electronic City", code: "ELC" }
      ]
    },
    {
      name: "Chennai, India",
      code: "MAA",
      children: [
        { name: "Tambaram", code: "TMB" },
        { name: "Guindy", code: "GND" }
      ]
    }
  ];

  /* ================= SMART PANEL ================= */
  function setupSmartPanel(inputId, panelId) {
    const input = document.getElementById(inputId);
    const panel = document.getElementById(panelId);
    if (!input || !panel) return;

    const popular = panel.querySelector(".popular-section") || panel.querySelector(".city-grid");
    const list = panel.querySelector(".search-list");

    const openPanel = () => {
      gsap.fromTo(panel,
        { opacity: 0, y: 20, scale: 0.96 },
        { opacity: 1, y: 0, scale: 1, display: "block", duration: 0.3 }
      );
    };

    const closePanel = () => {
      gsap.to(panel, {
        opacity: 0,
        y: 20,
        scale: 0.96,
        duration: 0.25,
        onComplete: () => (panel.style.display = "none")
      });
    };

    /* CLICK → POPULAR */
    input.addEventListener("click", () => {
      if (popular) popular.style.display = "block";
      if (list) list.style.display = "none";
      openPanel();
    });

    /* TYPE → SEARCH (PARENT + CHILD) */
    input.addEventListener("input", () => {
      const val = input.value.toLowerCase();
      if (!list) return;

      list.innerHTML = "";

      if (!val) {
        if (popular) popular.style.display = "block";
        list.style.display = "none";
        return;
      }

      if (popular) popular.style.display = "none";
      list.style.display = "block";

      airports.forEach(parent => {
        if (!parent.name.toLowerCase().includes(val)) return;

        // Parent row
        const parentLi = document.createElement("li");
        parentLi.style.fontWeight = "600";
        parentLi.innerHTML = `<span>${parent.name}</span><small>${parent.code}</small>`;
        parentLi.onclick = () => {
          input.value = parent.name;
          closePanel();
        };
        list.appendChild(parentLi);

        // Child rows
        parent.children.forEach(child => {
          const childLi = document.createElement("li");
          childLi.style.paddingLeft = "28px";
          childLi.style.fontSize = "0.9rem";
          childLi.innerHTML = `<span>${child.name}</span><small>${child.code}</small>`;
          childLi.onclick = () => {
            input.value = `${child.name}, ${parent.name}`;
            closePanel();
          };
          list.appendChild(childLi);
        });
      });
    });

    /* POPULAR CLICK */
    panel.querySelectorAll(".city").forEach(city => {
      city.addEventListener("click", () => {
        input.value = city.innerText;
        closePanel();
      });
    });

    /* OUTSIDE CLICK */
    document.addEventListener("click", e => {
      if (!panel.contains(e.target) && !input.contains(e.target)) {
        panel.style.display = "none";
      }
    });
  }

  /* INIT BOTH */
  setupSmartPanel("fromInput", "fromPanel");
  setupSmartPanel("toInput", "toPanel");
});

/* ================= HERO CAROUSEL ================= */
const slides = gsap.utils.toArray(".hero-slide");

if (slides.length > 1) {
  let current = 0;

  gsap.set(slides, { opacity: 0, scale: 1.1 });
  gsap.set(slides[0], { opacity: 1, scale: 1 });

  setInterval(() => {
    const prev = slides[current];
    current = (current + 1) % slides.length;
    const next = slides[current];

    gsap.timeline()
      .to(prev, {
        opacity: 0,
        scale: 1.15,
        duration: 1.2,
        ease: "power2.inOut"
      })
      .fromTo(
        next,
        { opacity: 0, scale: 1.05 },
        { opacity: 1, scale: 1, duration: 1.4, ease: "power2.out" },
        "-=0.6"
      );
  }, 5000);
}

gsap.registerPlugin(ScrollTrigger);

/* =====================
   SCROLL-IN REVEAL
===================== */
gsap.utils.toArray(".promo-card").forEach(card => {
  gsap.from(card, {
    opacity: 0,
    y: 120,
    scale: 0.94,
    duration: 1.2,
    ease: "power4.out",
    scrollTrigger: {
      trigger: card,
      start: "top 85%",
    }
  });
});

/* =====================
   HOVER PARALLAX
===================== */
document.querySelectorAll(".promo-card").forEach(card => {
  const image = card.querySelector(".promo-image");
  const content = card.querySelector(".promo-content");

  card.addEventListener("mousemove", e => {
    const rect = card.getBoundingClientRect();
    const x = (e.clientX - rect.left - rect.width / 2) / 20;
    const y = (e.clientY - rect.top - rect.height / 2) / 20;

    gsap.to(image, {
      x: x * 1.6,
      y: y * 1.6,
      scale: 1.05,
      duration: 0.4,
      ease: "power2.out"
    });

    gsap.to(content, {
      x: x * 0.8,
      y: y * 0.8,
      duration: 0.4,
      ease: "power2.out"
    });
  });

  card.addEventListener("mouseleave", () => {
    gsap.to([image, content], {
      x: 0,
      y: 0,
      scale: 1,
      duration: 0.6,
      ease: "power3.out"
    });
  });
});

/* =====================
   FLOATING ICON LOOP
===================== */
gsap.utils.toArray(".float-icon").forEach(icon => {
  gsap.to(icon, {
    y: () => gsap.utils.random(-20, 20),
    x: () => gsap.utils.random(-15, 15),
    rotation: () => gsap.utils.random(-15, 15),
    duration: gsap.utils.random(3, 6),
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut"
  });
});

/* =====================
   IMAGE SLOW FLOAT
===================== */
gsap.utils.toArray(".promo-image").forEach(img => {
  gsap.to(img, {
    y: 14,
    duration: 5,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut"
  });
});


// top flight offer start here 
gsap.registerPlugin(ScrollTrigger);

/* SCROLL REVEAL */
gsap.from(".offer-card", {
  scrollTrigger: {
    trigger: ".flight-offer-section",
    start: "top 80%"
  },
  opacity: 0,
  y: 60,
  stagger: 0.15,
  duration: 1,
  ease: "power4.out"
});

/* AUTO SCROLL */
const track = document.querySelector(".offer-track");
let autoScroll = gsap.to(track, {
  x: "-=600",
  duration: 12,
  ease: "none",
  repeat: -1
});

/* PAUSE ON HOVER */
track.addEventListener("mouseenter", () => autoScroll.pause());
track.addEventListener("mouseleave", () => autoScroll.resume());

/* DRAG */
let startX, currentX = 0;

track.addEventListener("mousedown", e => {
  startX = e.clientX;
  track.classList.add("dragging");
  document.onmousemove = move;
  document.onmouseup = stop;
});

function move(e) {
  const dx = e.clientX - startX;
  gsap.set(track, { x: currentX + dx });
}

function stop(e) {
  currentX += e.clientX - startX;
  document.onmousemove = null;
  document.onmouseup = null;
}

/* 3D TILT */
document.querySelectorAll(".offer-card").forEach(card => {
  card.addEventListener("mousemove", e => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const rx = (y / rect.height - 0.5) * -10;
    const ry = (x / rect.width - 0.5) * 10;

    gsap.to(card, {
      rotateX: rx,
      rotateY: ry,
      duration: 0.3
    });
  });

  card.addEventListener("mouseleave", () => {
    gsap.to(card, {
      rotateX: 0,
      rotateY: 0,
      duration: 0.4
    });
  });
});