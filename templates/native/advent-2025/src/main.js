import "./style.css";
import mixitup from "mixitup";
import Flickity from "flickity";
import gsap from "gsap";
import DrawSVGPlugin from "gsap/DrawSVGPlugin";
import ScrollTrigger from "gsap/ScrollTrigger";

document.addEventListener("DOMContentLoaded", () => {
  let currentWeekIndex = 0;
  let mixersDesktop = [];
  let flickityInstances = [];
  let currentFilter = "all";

  const weekKeys = window.adventData.weekKeys;

  // -------------------- Helper --------------------
  function isMobile() {
    return window.innerWidth < 921;
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

    const activeMobile = document.querySelector(
      `.week-${currentWeekIndex}-mobile.active`
    );
    if (!activeMobile) return;

    activeMobile.classList.remove("ready");

    const mobileCarousels = activeMobile.querySelectorAll(
      ".mobile-day-carousel"
    );

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

    requestAnimationFrame(() => {
      activeMobile.classList.add("ready");
    });
  }

  // -------------------- Custom Mobile Filter --------------------
  function filterMobileEvents(category) {
    if (!isMobile()) return;

    const activeMobile = document.querySelector(
      `.week-${currentWeekIndex}-mobile.active`
    );
    if (!activeMobile) return;

    const allMixElements = activeMobile.querySelectorAll(".mix");

    allMixElements.forEach((element) => {
      const elementCategory = element.getAttribute("data-category");

      if (category === "all" || elementCategory === category) {
        element.classList.remove("filtered-out");
      } else {
        element.classList.add("filtered-out");
      }
    });
    const daySections = activeMobile.querySelectorAll(".day-section");

    daySections.forEach((section) => {
      const items = section.querySelectorAll(".mix");
      const visibleItems = Array.from(items).filter(
        (el) => !el.classList.contains("filtered-out")
      );

      const currentHeight = section.offsetHeight;

      let targetHeight = 0;
      let shouldShow = false;

      if (visibleItems.length === 0) {
        targetHeight = 0;
        shouldShow = false;
      } else {
        targetHeight = section.scrollHeight;
        shouldShow = true;
      }

      if (Math.round(currentHeight) === Math.round(targetHeight)) {
        section.style.height = shouldShow ? "auto" : "0px";
        section.style.opacity = shouldShow ? "1" : "0";
        section.style.marginBottom = shouldShow ? "2rem" : "0";
        return;
      }
      section.style.overflow = "hidden";
      section.style.transition = "height 0.4s ease, opacity 0.4s ease";
      section.style.height = currentHeight + "px";

      requestAnimationFrame(() => {
        section.style.height = targetHeight + "px";
        section.style.opacity = shouldShow ? "1" : "0";
        section.style.marginBottom = shouldShow ? "2rem" : "0";
      });

      if (shouldShow) {
        setTimeout(() => {
          section.style.height = "auto";
        }, 400);
      }
    });

    setTimeout(() => {
      flickityInstances.forEach((f) => {
        if (f) {
          f.resize();
          f.reloadCells();
        }
      });
    }, 550);
  }

  // -------------------- Show/Hide week --------------------
  function updateWeekVisibility() {
    const weekRangeEl = document.getElementById("week-range");

    if (weekRangeEl) {
      weekRangeEl.classList.add("changing");

      setTimeout(() => {
        weekRangeEl.textContent = weekKeys[currentWeekIndex];
        weekRangeEl.classList.remove("changing");
      }, 200);
    }

    document.querySelectorAll(".week-table").forEach((table) => {
      if (table.classList.contains(`week-${currentWeekIndex}-table`)) {
        table.classList.add("active");
      } else {
        table.classList.remove("active");
      }
    });

    document.querySelectorAll(".week-mobile-container").forEach((container) => {
      if (container.classList.contains(`week-${currentWeekIndex}-mobile`)) {
        container.classList.add("active");
      } else {
        container.classList.remove("active");
      }
    });

    if (isMobile()) {
      setTimeout(() => {
        initFlickity();
        if (currentFilter !== "all") {
          filterMobileEvents(currentFilter);
        }
      }, 20);
    }
  }

  // -------------------- MixItUp  --------------------
  function initMixitup() {
    document
      .querySelectorAll(".mixitup-container-desktop")
      .forEach((container) => {
        const mixer = mixitup(container, {
          selectors: { target: ".mix" },
          animation: {
            duration: 500,
            effects: "fade translateY(-20px)",
            easing: "cubic-bezier(0.4, 0.0, 0.2, 1)",
          },
          load: { filter: "all" },
        });
        mixersDesktop.push(mixer);
      });

    updateWeekVisibility();
  }

  // -------------------- Navigation --------------------
  document.getElementById("arrow-left")?.addEventListener("click", () => {
    if (currentWeekIndex > 0) {
      currentWeekIndex--;
      updateWeekVisibility();
    }
  });

  document.getElementById("arrow-right")?.addEventListener("click", () => {
    if (currentWeekIndex < weekKeys.length - 1) {
      currentWeekIndex++;
      updateWeekVisibility();
    }
  });

  // -------------------- Category filter --------------------
  document.querySelectorAll(".category-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      document.querySelectorAll(".category-btn").forEach((b) => {
        b.classList.remove("bg-olive-green", "text-[#EFE1D3]", "active");
        b.classList.add("bg-[#E5CAB0]", "text-olive-green");
      });
      btn.classList.add("bg-olive-green", "text-[#EFE1D3]", "active");
      btn.classList.remove("bg-[#E5CAB0]", "text-olive-green");

      const filterValue = btn.getAttribute("data-filter");

      const category =
        filterValue === "all" ? "all" : filterValue.replace(".", "");
      currentFilter = category;

      if (isMobile()) {
        filterMobileEvents(category);
      } else {
        mixersDesktop.forEach((mixer) => mixer.filter(filterValue));
      }
    });
  });

  // -------------------- Window resize --------------------
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      mixersDesktop.forEach((mixer) => mixer.destroy());
      mixersDesktop = [];
      destroyFlickity();
      initMixitup();

      if (isMobile() && currentFilter !== "all") {
        setTimeout(() => {
          filterMobileEvents(currentFilter);
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

  // -------------------- Start --------------------
  initMixitup();

  // -------------------- GSAP ---------------------
  gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin);

  const maskConfigs = [
    {
      maskPath: "#mask-path-darkgreen",
      trigger: "#path-darkgreen",
      reverse: true,
    },
    /*
            {
                maskPath: '#mask-path-darkgreen-mobile',
                trigger: '#path-dark-green-mobile',
                reverse: true
            },*/
    {
      maskPath: "#mask-path-bordo",
      trigger: "#path-bordo",
      reverse: false,
    },
    /*
            {
                maskPath: '#mask-path-bordo-mobile',
                trigger: '#path-bordo-mobile',
                reverse: false
            },*/
    {
      maskPath: "#mask-path-red",
      trigger: "#path-red",
      reverse: false,
    },
    /*
            {
                maskPath: '#mask-path-red-mobile',
                trigger: '#path-red-mobile',
                reverse: false
            },*/
    {
      maskPath: "#mask-path-blue",
      trigger: "#path-blue",
      reverse: true,
    },
    /*{
                maskPath: '#mask-path-blue-mobile',
                trigger: '#path-blue-mobile',
                reverse: true
            }
                */
  ];

  maskConfigs.forEach((config) => {
    const maskPath = document.querySelector(config.maskPath);
    const trigger = document.querySelector(config.trigger);

    if (maskPath && trigger) {
      if (config.reverse) {
        gsap.set(maskPath, {
          drawSVG: "100% 100%",
        });
        gsap.to(maskPath, {
          drawSVG: "0% 100%",
          ease: "power3.inOut",
          scrollTrigger: {
            trigger: trigger,
            start: "top 80%",
            end: "bottom 20%",
            scrub: true,
            invalidateOnRefresh: true,
          },
        });
      } else {
        gsap.set(maskPath, {
          drawSVG: "0%",
        });
        gsap.to(maskPath, {
          drawSVG: "100%",
          ease: "power3.inOut",
          scrollTrigger: {
            trigger: trigger,
            start: "top 80%",
            end: "bottom 20%",
            scrub: true,
            invalidateOnRefresh: true,
          },
        });
      }
    }
  });
});
