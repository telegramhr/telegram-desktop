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
