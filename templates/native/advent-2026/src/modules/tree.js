import { $, esc } from "./dom.js";
import { storyArt } from "./dialog.js";
import { CAROUSELS, updateCarousel } from "./carousel.js";

export const ALL = "Sve kuglice";
export const WINTER = "Zimske aktivnosti";

// Mjesta za kuglice na boru (% ilustracije), od vrha prema dnu, red po red.
// Koriste se za članke bez zadanog položaja (svi iz ACF-a). Najviše TREE_SLOTS.length kuglica;
// članci preko toga ne dobiju kuglicu, ali su i dalje u karuselu ispod bora.
const TREE_SLOTS = [
  [51, 23],
  [48, 29], [55, 30],
  [46, 36], [51, 36], [58, 37],
  [43, 43], [48, 43], [54, 44], [60, 44],
  [41, 50], [46, 50], [51, 51], [57, 51], [63, 51],
  [39, 57], [44, 57], [49, 58], [54, 58], [60, 58], [65, 58],
  [37, 64], [42, 64], [47, 65], [52, 65], [57, 65], [63, 65], [68, 65],
  [39, 72], [44, 72], [49, 72], [54, 72], [59, 72], [64, 72], [69, 72],
];

// Iznad ovoliko kuglica susjedna mjesta su zauzeta, pa se na mobitelu kuglice smanjuju (layout.css).
const DENSE_FROM = 12;

// Kategorije naizmjence (recept, poklon, dom…), da iste boje/filteri ne budu u jednoj nakupini.
function interleaveByCategory(stories) {
  const groups = new Map();
  stories.forEach((s) => groups.set(s.category, [...(groups.get(s.category) || []), s]));
  const queues = [...groups.values()];
  const longest = Math.max(0, ...queues.map((q) => q.length));
  return Array.from({ length: longest }, (_, i) => queues.map((q) => q[i]).filter(Boolean)).flat();
}

// n mjesta ravnomjerno raspoređenih po cijelom boru (ne samo gornjih n).
function spreadSlots(n) {
  const total = TREE_SLOTS.length;
  if (n >= total) return TREE_SLOTS;
  if (n <= 1) return TREE_SLOTS.slice(0, n);
  return Array.from({ length: n }, (_, i) => TREE_SLOTS[Math.round((i * (total - 1)) / (n - 1))]);
}

// Položaji kuglica računaju se jednom: filter samo zatamnjuje, kuglice se ne miču.
function placeOrnaments(stories) {
  const fixed = stories.filter((s) => Array.isArray(s.position)).map((s) => ({ story: s, pos: s.position }));
  const free = interleaveByCategory(stories.filter((s) => !Array.isArray(s.position)));
  const slots = spreadSlots(free.length);
  return [...fixed, ...slots.map((pos, i) => ({ story: free[i], pos }))];
}

const storyCard = (s) =>
  `<button class="story-card" type="button" data-story="${esc(s.id)}">${storyArt(s, "story-art")}<span class="meta">${esc(s.portal)} / ${esc(s.category)}</span><h3>${esc(s.title)}</h3><p>${esc(s.excerpt)}</p><span class="more">Otkrij priču →</span></button>`;

function ornaments(placed, filter) {
  return placed
    .map(({ story: s, pos: [x, y] }) => {
      const dimmed = filter !== ALL && filter !== s.category ? " filtered" : "";
      return `<button class="ornament${dimmed}" type="button" style="left:${Number(x)}%;top:${Number(y)}%" data-story="${esc(s.id)}" aria-label="${esc(s.title)}"></button>`;
    })
    .join("");
}

const countLabel = (n) => {
  const mod10 = n % 10, mod100 = n % 100;
  const word = mod10 === 1 && mod100 !== 11 ? "priča" : mod10 >= 2 && mod10 <= 4 && (mod100 < 12 || mod100 > 14) ? "priče" : "priča";
  return `${n} ${word}`;
};

export function createTree({ stories, categories }, onStoryClick) {
  let filter = ALL;
  const placed = placeOrnaments(stories);
  $("#ornaments").classList.toggle("is-dense", placed.length > DENSE_FROM);

  function render() {
    $("#ornaments").innerHTML = ornaments(placed, filter);
    $("#categories").innerHTML = categories
      .map((c) => `<button type="button" class="${filter === c ? "active" : ""}" aria-pressed="${filter === c}" data-cat="${esc(c)}">${esc(c)}</button>`)
      .join("");

    const main = stories.filter((s) => s.category !== WINTER && (filter === ALL || s.category === filter));
    const winter = stories.filter((s) => s.category === WINTER);
    $("#storyCount").textContent = countLabel(main.length);
    $("#storyGrid").innerHTML = main.map(storyCard).join("");
    $("#winterCount").textContent = countLabel(winter.length);
    $("#winterGrid").innerHTML = winter.map(storyCard).join("");
    $(".winter-stories").hidden = winter.length === 0;
    requestAnimationFrame(() => CAROUSELS.forEach(updateCarousel));
  }

  $("#ornaments").addEventListener("click", (e) => {
    const b = e.target.closest("[data-story]");
    if (b) onStoryClick(b.dataset.story);
  });
  $("#categories").addEventListener("click", (e) => {
    const c = e.target.closest("[data-cat]");
    if (!c) return;
    filter = c.dataset.cat;
    render();
  });

  render();
}
