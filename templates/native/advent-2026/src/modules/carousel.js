import { $, reducedMotion } from "./dom.js";

const EDGE_TOLERANCE = 2;
const FALLBACK_GAP = 28;

export function updateCarousel({ grid, prev, next }) {
  const g = $("#" + grid);
  const end = g.scrollWidth - g.clientWidth;
  $("#" + prev).disabled = g.scrollLeft <= EDGE_TOLERANCE;
  $("#" + next).disabled = g.scrollLeft >= end - EDGE_TOLERANCE;
}

function slide(direction, gridId) {
  const grid = $("#" + gridId);
  const card = grid.querySelector(".story-card");
  if (!card) return;
  const gap = parseFloat(getComputedStyle(grid).gap) || FALLBACK_GAP;
  const width = card.getBoundingClientRect().width + gap;
  const visible = Math.max(1, Math.floor((grid.clientWidth + gap) / width));
  grid.scrollBy({ left: direction * width * visible, behavior: reducedMotion.matches ? "instant" : "smooth" });
}

export const CAROUSELS = [
  { grid: "storyGrid", prev: "previousArticles", next: "nextArticles" },
  { grid: "winterGrid", prev: "previousWinter", next: "nextWinter" },
];

export function initCarousels(onStoryClick) {
  for (const c of CAROUSELS) {
    const grid = $("#" + c.grid);
    const refresh = () => updateCarousel(c);
    $("#" + c.prev).addEventListener("click", () => slide(-1, c.grid));
    $("#" + c.next).addEventListener("click", () => slide(1, c.grid));
    grid.addEventListener("scroll", refresh, { passive: true });
    grid.addEventListener("keydown", (e) => {
      if (e.target !== grid || (e.key !== "ArrowLeft" && e.key !== "ArrowRight")) return;
      e.preventDefault();
      slide(e.key === "ArrowRight" ? 1 : -1, c.grid);
    });
    grid.addEventListener("click", (e) => {
      const b = e.target.closest("[data-story]");
      if (b) onStoryClick(b.dataset.story);
    });
    addEventListener("resize", refresh);
    requestAnimationFrame(refresh);
  }
}
