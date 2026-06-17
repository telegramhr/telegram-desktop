import Flickity from "flickity";

window.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".js-knockout-carousel").forEach((carousel) => {
    new Flickity(carousel, {
      cellAlign: "left",
      contain: true,
      pageDots: true,
      prevNextButtons: false,
      groupCells: true,
    });
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
