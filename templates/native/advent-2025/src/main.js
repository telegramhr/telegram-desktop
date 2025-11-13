import "./style.css";
import Aos from "aos";
import "aos/dist/aos.css";
import mixitup from "mixitup";
import Flickity from "flickity";

document.addEventListener("DOMContentLoaded", () => {
  let allWeeks = {};
  let weekKeys = [];
  let currentWeekIndex = 0;
  let mixer = null;
  let flickityInstances = [];

  // -------------------- Helper --------------------
  function isMobile() {
    return window.innerWidth < 768;
  }

  async function loadCalendar() {
    try {
      const res = await fetch(
        "/wp-content/themes/telegram-desktop/templates/native/advent-2025/calendar.php",
        { cache: "no-store" }
      );
      allWeeks = await res.json();
      weekKeys = Object.keys(allWeeks);
    } catch (err) {
      allWeeks = {};
      weekKeys = [];
    }
  }
  // -------------------- Render --------------------
  function renderWeek() {
    if (isMobile()) renderWeekMobile();
    else renderWeekDesktop();
  }

  function renderWeekMobile() {
    if (!weekKeys.length) return;

    const weekRange = weekKeys[currentWeekIndex];
    const weekEvents = allWeeks[weekRange];

    const weekRangeEl = document.getElementById("week-range");
    if (weekRangeEl) weekRangeEl.textContent = weekRange;

    const container = document.getElementById("mixitup-container");
    if (!container) return;

    if (mixer) mixer.destroy();
    flickityInstances.forEach((f) => f?.destroy());
    flickityInstances = [];
    container.innerHTML = "";

    const [startDay, startMonth, startYear] = weekRange
      .split(" - ")[0]
      .split(".")
      .map((s) => s.trim());
    const startDate = new Date(
      startYear || "2025",
      parseInt(startMonth) - 1,
      parseInt(startDay)
    );

    const daysOfWeek = [
      "Ponedjeljak",
      "Utorak",
      "Srijeda",
      "Četvrtak",
      "Petak",
      "Subota",
      "Nedjelja",
    ];

    // prepare events by day
    const eventsByDay = {};
    for (let i = 0; i < 7; i++) {
      const dayDate = new Date(startDate);
      dayDate.setDate(startDate.getDate() + i);
      const dateKey = `${dayDate.getFullYear()}-${String(
        dayDate.getMonth() + 1
      ).padStart(2, "0")}-${String(dayDate.getDate()).padStart(2, "0")}`;
      eventsByDay[dateKey] = [];
    }

    weekEvents.forEach((ev) => {
      const eventDate = new Date(ev.date);
      const dateKey = `${eventDate.getUTCFullYear()}-${String(
        eventDate.getUTCMonth() + 1
      ).padStart(2, "0")}-${String(eventDate.getUTCDate()).padStart(2, "0")}`;
      if (eventsByDay[dateKey]) eventsByDay[dateKey].push(ev);
    });

    // render each day
    for (let i = 0; i < 7; i++) {
      const dayDate = new Date(startDate);
      dayDate.setDate(startDate.getDate() + i);
      const dateKey = `${dayDate.getFullYear()}-${String(
        dayDate.getMonth() + 1
      ).padStart(2, "0")}-${String(dayDate.getDate()).padStart(2, "0")}`;
      const dayEvents = eventsByDay[dateKey] || [];
      if (!dayEvents.length) continue;

      // day header
      const dayHeader = document.createElement("div");
      dayHeader.className =
        "bg-olive-green flex flex-row gap-3 justify-center text-light-sand text-base font-bold text-center py-[9px] rounded-sm font-inter";
      dayHeader.innerHTML = `<span>${
        daysOfWeek[i]
      }</span> <span>${dayDate.getDate()}.${
        dayDate.getMonth() + 1
      }.${dayDate.getFullYear()}</span>`;
      container.appendChild(dayHeader);

      const dayWrapper = document.createElement("div");
      dayWrapper.className = "day-wrapper mb-4";
      container.appendChild(dayWrapper);

      dayEvents.forEach((ev) => {
        const box = document.createElement("div");
        const categoryClass = ev.category.toLowerCase().replace(/\s+/g, "-");
        box.className = `mix ${categoryClass} w-[146px] h-[138px] bg-white px-3 py-4 rounded-sm shadow mr-3`;

        const timeDate = new Date(ev.time);
        const hours = timeDate.getUTCHours();
        const minutes = String(timeDate.getUTCMinutes()).padStart(2, "0");
        const formattedTime = `${hours}:${minutes}`;

        box.innerHTML = `
          <div class="flex flex-col gap-1 h-full">
            <span class="font-medium text-base text-olive-green">${formattedTime}</span>
            <h3 class="font-semibold text-lg">${ev.title}</h3>
            <p class="font-medium text-[12px]">${ev.location}</p>
          </div>
        `;
        dayWrapper.appendChild(box);
      });

      const flkty = new Flickity(dayWrapper, {
        cellAlign: "left",
        contain: true,
        pageDots: false,
        freeScroll: false,
        wrapAround: false,
        prevNextButtons: false,
      });
      flickityInstances.push(flkty);
    }

    initMixitup();
  }

  function renderWeekDesktop() {
    if (!weekKeys.length) return;

    const weekRange = weekKeys[currentWeekIndex];
    const weekEvents = allWeeks[weekRange];

    const weekRangeEl = document.getElementById("week-range");
    if (weekRangeEl) weekRangeEl.textContent = weekRange;

    const container = document.getElementById("mixitup-container");
    if (!container) return;
    container.innerHTML = "";

    const theadRow = document.getElementById("thead-row");
    if (!theadRow) return;
    theadRow.innerHTML = "";

    const [startDay, startMonth, startYear] = weekRange
      .split(" - ")[0]
      .split(".")
      .map((s) => s.trim());
    const startDate = new Date(
      startYear || "2025",
      parseInt(startMonth) - 1,
      parseInt(startDay)
    );
    const daysOfWeek = [
      "Ponedjeljak",
      "Utorak",
      "Srijeda",
      "Četvrtak",
      "Petak",
      "Subota",
      "Nedjelja",
    ];

    // render table header
    for (let i = 0; i < 7; i++) {
      const th = document.createElement("th");
      th.className =
        "bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm";
      const dayDate = new Date(startDate);
      dayDate.setDate(startDate.getDate() + i);
      th.innerHTML = `${daysOfWeek[i]}<br>${dayDate.getDate()}.${
        dayDate.getMonth() + 1
      }.${dayDate.getFullYear()}`;
      theadRow.appendChild(th);
    }

    // prepare events by day
    const eventsByDay = {};
    for (let i = 0; i < 7; i++) {
      const dayDate = new Date(startDate);
      dayDate.setDate(startDate.getDate() + i);
      const dateKey = `${dayDate.getFullYear()}-${String(
        dayDate.getMonth() + 1
      ).padStart(2, "0")}-${String(dayDate.getDate()).padStart(2, "0")}`;
      eventsByDay[dateKey] = [];
    }

    weekEvents.forEach((ev) => {
      const eventDate = new Date(ev.date);
      const dateKey = `${eventDate.getUTCFullYear()}-${String(
        eventDate.getUTCMonth() + 1
      ).padStart(2, "0")}-${String(eventDate.getUTCDate()).padStart(2, "0")}`;
      if (eventsByDay[dateKey]) eventsByDay[dateKey].push(ev);
    });

    // render table rows
    const row = document.createElement("tr");
    row.className = "w-full flex flex-row gap-3";

    for (let i = 0; i < 7; i++) {
      const dayDate = new Date(startDate);
      dayDate.setDate(startDate.getDate() + i);
      const dateKey = `${dayDate.getFullYear()}-${String(
        dayDate.getMonth() + 1
      ).padStart(2, "0")}-${String(dayDate.getDate()).padStart(2, "0")}`;

      const td = document.createElement("td");
      td.className = "max-w-[146px] w-full flex flex-col gap-4";

      const dayEvents = eventsByDay[dateKey] || [];
      dayEvents.forEach((ev) => {
        const box = document.createElement("div");
        const categoryClass = ev.category.toLowerCase().replace(/\s+/g, "-");
        box.className = `mix ${categoryClass} w-full h-[138px] justify-center bg-white px-3 py-4 rounded-sm flex flex-col gap-1 shadow`;

        const timeDate = new Date(ev.time);
        const hours = timeDate.getUTCHours();
        const minutes = String(timeDate.getUTCMinutes()).padStart(2, "0");
        const formattedTime = `${hours}:${minutes}`;

        const timeEl = document.createElement("span");
        timeEl.className = "font-medium text-base";
        timeEl.textContent = formattedTime;

        const titleEl = document.createElement("h3");
        titleEl.className = "font-semibold text-lg";
        titleEl.textContent = ev.title;

        const locationEl = document.createElement("p");
        locationEl.className = "font-medium text-[12px]";
        locationEl.textContent = ev.location;

        box.appendChild(timeEl);
        box.appendChild(titleEl);
        box.appendChild(locationEl);
        td.appendChild(box);
      });

      row.appendChild(td);
    }

    container.appendChild(row);
    initMixitup();
  }

  // -------------------- MixItUp --------------------
  function initMixitup() {
    const container = document.getElementById("mixitup-container");
    if (!container) return;

    if (mixer) mixer.destroy();
    const mixEls = container.querySelectorAll(".mix");
    mixEls.forEach((el) => {
      const width = getComputedStyle(el).width;
      el.style.width = width;
      el.style.flex = "0 0 " + width;
    });

    mixer = mixitup(container, {
      selectors: { target: ".mix" },
      animation: {
        duration: 300,
        effects: "fade scale(0.8)",
        easing: "ease-in-out",
      },
      load: { filter: "all" },
      callbacks: {
        onMixEnd: () => {
          if (isMobile()) {
            flickityInstances.forEach((f) => {
              if (f) {
                f.resize();
                f.reloadCells();
              }
            });
          }
        },
      },
    });
  }

  // -------------------- Navigation --------------------
  document.getElementById("arrow-left")?.addEventListener("click", () => {
    if (currentWeekIndex > 0) {
      currentWeekIndex--;
      animateWeekChange();
    }
  });
  document.getElementById("arrow-right")?.addEventListener("click", () => {
    if (currentWeekIndex < weekKeys.length - 1) {
      currentWeekIndex++;
      animateWeekChange();
    }
  });
  function animateWeekChange() {
    const container = document.getElementById("mixitup-container");
    if (!container) return;
    container.querySelectorAll(".mix").forEach((t) => (t.style.opacity = "0"));
    setTimeout(() => renderWeek(), 200);
  }

  // -------------------- Category filter --------------------
  document.querySelectorAll(".category-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      document.querySelectorAll(".category-btn").forEach((b) => {
        b.classList.remove("bg-olive-green", "text-[#EFE1D3]", "active");
        b.classList.add("bg-[#E5CAB0]", "text-olive-green");
      });
      btn.classList.add("bg-olive-green", "text-[#EFE1D3]", "active");
      btn.classList.remove(
        "bg-[#E5CAB0]",
        "text-olive-green",
        "hover:bg-[#d4b79e]"
      );

      const filterValue = btn.getAttribute("data-filter");
      if (mixer) mixer.filter(filterValue);
    });
  });

  // -------------------- Window resize --------------------
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => renderWeek(), 250);
  });
  // -------------------- Snow effect --------------------

  const snowContainer = document.querySelector(".snow");

  function createFlake() {
    const flake = document.createElement("div");
    flake.classList.add("flake");

    const size = Math.random() * 4 + 2;
    flake.style.width = `${size}px`;
    flake.style.height = `${size}px`;
    flake.style.left = Math.random() * 100 + "vw";
    flake.style.animationDuration = Math.random() * 5 + 5 + "s";
    flake.style.opacity = Math.random() * 0.8 + 0.2;

    snowContainer.appendChild(flake);

    setTimeout(() => flake.remove(), 10000);
  }

  setInterval(createFlake, 100);
  // -------------------- Init --------------------
  (async function init() {
    await loadCalendar();
    renderWeek();
  })();
});
