import "./style.css";
import Aos from "aos";
import "aos/dist/aos.css";
import mixitup from "mixitup";
import Flickity from "flickity";

document.addEventListener("DOMContentLoaded", () => {
  let mixerDesktop = null;
  let mixerMobile = null;
  let flickityInstances = [];

  // -------------------- Helper funkcije --------------------
  function isMobile() {
    return window.innerWidth < 768; // md breakpoint
  }

  function destroyFlickity() {
    flickityInstances.forEach((instance) => {
      if (instance) instance.destroy();
    });
    flickityInstances = [];
  }

  function initFlickity() {
    if (!isMobile()) return;

    destroyFlickity();

    const mobileCarousels = document.querySelectorAll(".mobile-day-carousel");
    mobileCarousels.forEach((carousel) => {
      const flickity = new Flickity(carousel, {
        cellAlign: "left",
        contain: true,
        prevNextButtons: false,
        pageDots: false,
        freeScroll: false,
        wrapAround: false,
        groupCells: false,
      });
      flickityInstances.push(flickity);
    });
  }

  // -------------------- MixItUp za Desktop --------------------
  function initMixitupDesktop() {
    const container = document.getElementById("mixitup-container-desktop");
    if (!container) return;

    if (mixerDesktop) mixerDesktop.destroy();

    mixerDesktop = mixitup(container, {
      selectors: { target: ".mix" },
      animation: {
        duration: 300,
        effects: "fade scale(0.8)",
        easing: "ease-in-out",
      },
      load: { filter: "all" },
    });
  }

  // -------------------- MixItUp za Mobile --------------------
  function initMixitupMobile() {
    const container = document.getElementById("mixitup-container-mobile");
    if (!container) return;

    if (mixerMobile) mixerMobile.destroy();

    mixerMobile = mixitup(container, {
      selectors: { target: ".mix" },
      animation: {
        duration: 300,
        effects: "fade scale(0.8)",
        easing: "ease-in-out",
      },
      load: { filter: "all" },
      callbacks: {
        onMixEnd: () => {
          setTimeout(() => {
            initFlickity();
          }, 100);
        },
      },
    });
  }

  // -------------------- INIT --------------------
  function initMixitup() {
    if (isMobile()) {
      initMixitupMobile();
      initFlickity();
    } else {
      initMixitupDesktop();
    }
  }

  // -------------------- Category filter --------------------
  document.querySelectorAll(".category-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      // Update button styles
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

      // Primijeni filter na odgovarajući mixer
      if (isMobile()) {
        if (mixerMobile) mixerMobile.filter(filterValue);
      } else {
        if (mixerDesktop) mixerDesktop.filter(filterValue);
      }
    });
  });

  // -------------------- Window resize --------------------
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      // Reinicijaliziraj sve na resize
      if (mixerDesktop) mixerDesktop.destroy();
      if (mixerMobile) mixerMobile.destroy();
      destroyFlickity();

      initMixitup();

      // Resetuj aktivni filter
      const activeBtn = document.querySelector(".category-btn.active");
      if (activeBtn) {
        const filterValue = activeBtn.getAttribute("data-filter");
        setTimeout(() => {
          if (isMobile()) {
            if (mixerMobile) mixerMobile.filter(filterValue);
          } else {
            if (mixerDesktop) mixerDesktop.filter(filterValue);
          }
        }, 100);
      }
    }, 250);
  });

  // -------------------- Snow effect --------------------
  const snowContainer = document.querySelector(".snow");

  if (snowContainer) {
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

    setInterval(createFlake, 50);
  }

  // -------------------- Init AOS --------------------
  Aos.init({
    duration: 800,
    once: true,
  });

  // -------------------- Start --------------------
  initMixitup();
});
