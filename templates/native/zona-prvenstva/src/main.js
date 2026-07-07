import Flickity from "flickity";

window.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".js-knockout-carousel").forEach((carousel) => {
    const flkty = new Flickity(carousel, {
      cellAlign: "left",
      contain: true,
      pageDots: true,
      prevNextButtons: false,
      groupCells: true,
    });

    // custom prev/next buttons
    const root = carousel.closest(".js-knockout-wrap") ?? document;
    const prevBtn = root.querySelector(".js-knockout-prev");
    const nextBtn = root.querySelector(".js-knockout-next");

    prevBtn?.addEventListener("click", () => flkty.previous());
    nextBtn?.addEventListener("click", () => flkty.next());

    const updateButtons = () => {
      const lastIndex = flkty.slides.length - 1;
      if (prevBtn) prevBtn.disabled = flkty.selectedIndex === 0;
      if (nextBtn) nextBtn.disabled = flkty.selectedIndex >= lastIndex;
    };

    flkty.on("select", updateButtons);
    updateButtons();
  });
  document.querySelectorAll(".js-bracket-carousel").forEach((carousel) => {
    const boxH = Number(carousel.dataset.boxH) || 72;
    const baseGap = Number(carousel.dataset.baseGap) || 10;
    const rounds = Array.from(carousel.querySelectorAll(".zp-round"));

    const isDesktop = () => window.matchMedia("(min-width: 1024px)").matches;
    const isTablet = () =>
      window.matchMedia("(min-width: 768px) and (max-width: 1023.98px)").matches;


    const visibleCount = () => (isDesktop() ? 3 : isTablet() ? 2 : 1);

    const sizeCells = () => {
      const n = visibleCount();
      const gap = n > 1 ? 32 : 0; 
      const width = (carousel.clientWidth - gap * (n - 1)) / n;
      rounds.forEach((r) => {
        r.style.width = `${Math.floor(width)}px`;
      });
    };

    sizeCells();

    const flkty = new Flickity(carousel, {
      cellAlign: "left",
      contain: true,
      pageDots: false,
      prevNextButtons: false,
      groupCells: false,
    });

    // custom prev/next buttons
    const root = carousel.closest(".relative") ?? document;
    const prevBtn = root.querySelector(".js-bracket-prev");
    const nextBtn = root.querySelector(".js-bracket-next");
    const maxIndex = () => Math.max(0, rounds.length - visibleCount());

    const clampSelected = () => {
      if (flkty.selectedIndex > maxIndex()) {
        flkty.select(maxIndex(), false, true);
      }
    };

    prevBtn?.addEventListener("click", () => flkty.previous());
    nextBtn?.addEventListener("click", () => {
      if (flkty.selectedIndex < maxIndex()) flkty.next();
    });


    // Default the bracket to the "Osmina finala" (Round of 16) column.
    const OSMINA_LABEL = "osmina finala";
    const defaultRoundIndex = () => {
      const idx = rounds.findIndex((r) => {
        const label = r.querySelector("span")?.textContent?.trim().toLowerCase();
        return label === OSMINA_LABEL;
      });
      return idx === -1 ? 0 : Math.min(idx, maxIndex());
    };

    const lastRound = rounds.length - 1;
    const relayout = () => {
      const base = flkty.selectedIndex; // leftmost visible round index
      rounds.forEach((round) => {
        const absR = Number(round.dataset.round) || 0;

    
        if (absR === lastRound) {
         
          round.querySelectorAll(".zp-tie").forEach((tie) => {
            tie.style.marginTop = "0px";
            tie.style.marginBottom = "0px";
          });
          return;
        }

        const rel = Math.max(0, absR - base);
        const step = (boxH + baseGap) * 2 ** rel;
        const margin = (step - boxH) / 2;
        round.querySelectorAll(".zp-tie").forEach((tie) => {
          tie.style.marginTop = `${margin}px`;
          tie.style.marginBottom = `${margin}px`;
        });
      });

     
     
      const cs0 = rounds[base] ? getComputedStyle(rounds[base]) : null;
      const padding = cs0
        ? parseFloat(cs0.paddingTop) + parseFloat(cs0.paddingBottom)
        : 48;
      const columnGap = cs0 ? parseFloat(cs0.rowGap || cs0.gap || "0") : 24;
      const header0 = rounds[base] ? rounds[base].querySelector("span") : null;
      const headerH = header0 ? header0.offsetHeight + columnGap : 40;

      const roundBodyHeight = (round) => {
        const absR = Number(round.dataset.round) || 0;
        if (absR === lastRound) {
          // Final column has labels between two boxes: measure real content.
          const body = round.querySelector(".zp-round-body");
          return (body ? body.scrollHeight : boxH * 2) + 16;
        }
        const tieCount = round.querySelectorAll(".zp-tie").length;
        return tieCount * (boxH + baseGap);
      };

      let bodyHeight = 0;
      const visible = visibleCount();
      for (let i = base; i < base + visible && i < rounds.length; i++) {
        bodyHeight = Math.max(bodyHeight, roundBodyHeight(rounds[i]));
      }
      const total = bodyHeight + headerH + padding;

      const viewport = carousel.querySelector(".flickity-viewport");
      if (viewport) {
        viewport.style.transition = "height 250ms ease";
        viewport.style.height = `${total}px`;
      }
    };

    const updateButtons = () => {
      if (prevBtn) prevBtn.disabled = flkty.selectedIndex === 0;
      if (nextBtn) nextBtn.disabled = flkty.selectedIndex >= maxIndex();
    };

    flkty.on("select", () => {
      clampSelected();
      relayout();
      updateButtons();
    });

    let resizeTimer;
    window.addEventListener("resize", () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        sizeCells();
        flkty.resize();
        clampSelected();
        relayout();
        updateButtons();
      }, 150);
    });

    flkty.select(defaultRoundIndex(), false, true);
    relayout();
    updateButtons();
  });
  document.querySelectorAll(".js-bestof-carousel").forEach((carousel) => {
    const flkty = new Flickity(carousel, {
      cellAlign: "left",
      contain: true,
      pageDots: true,
      prevNextButtons: false,
      groupCells: true,
    });

    // custom prev/next buttons
    const root = carousel.closest(".js-bestof-wrap") ?? document;
    const prevBtn = root.querySelector(".js-bestof-prev");
    const nextBtn = root.querySelector(".js-bestof-next");

    prevBtn?.addEventListener("click", () => flkty.previous());
    nextBtn?.addEventListener("click", () => flkty.next());

    const updateButtons = () => {
      const lastIndex = flkty.slides.length - 1;
      if (prevBtn) prevBtn.disabled = flkty.selectedIndex === 0;
      if (nextBtn) nextBtn.disabled = flkty.selectedIndex >= lastIndex;
    };

    flkty.on("select", updateButtons);
    updateButtons();
  });
  document.querySelectorAll(".js-table-carousel").forEach((carousel) => {
    const flkty = new Flickity(carousel, {
      cellAlign: "left",
      contain: true,
      pageDots: false,
      prevNextButtons: false,
      groupCells: true,
    });

    // custom prev/next buttons
    const root = carousel.closest(".relative") ?? document;
    const prevBtn = root.querySelector(".js-table-prev");
    const nextBtn = root.querySelector(".js-table-next");

    prevBtn?.addEventListener("click", () => flkty.previous());
    nextBtn?.addEventListener("click", () => flkty.next());

    const updateButtons = () => {
      const lastIndex = flkty.slides.length - 1;
      if (prevBtn) prevBtn.disabled = flkty.selectedIndex === 0;
      if (nextBtn) nextBtn.disabled = flkty.selectedIndex >= lastIndex;
    };

    flkty.on("select", updateButtons);
    updateButtons();
  });
});
