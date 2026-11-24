import { $, esc, reducedMotion } from "./dom.js";
import { showDialog } from "./dialog.js";

const TRIP_MS = 65000; // jedan smjer
const MAX_FRAME_MS = 64;
const LOOKAHEAD = 16;
const TURN_SMOOTHING_MS = 85;

export function createStations(cities, onOpen) {
  $("#stations").innerHTML = cities
    .map((c, i) => `<button class="station" type="button" style="left:${Number(c.x)}%;top:${Number(c.y)}%" data-city="${i}">${esc(c.name)}</button>`)
    .join("");

  function showCity(i) {
    const c = cities[i];
    if (!c) return;
    document.querySelectorAll(".station").forEach((b, j) => b.classList.toggle("active", i === j));
    showDialog(`<p class="eyebrow">Adventski vodič · Stanica ${i + 1}</p><h2>${esc(c.name)}</h2><p class="hand">${esc(c.tagline)}</p><p>${esc(c.body)}</p><p>Na ovoj stanici u kampanji otkrivamo članke i videa o lokalnim okusima, izletima i događanjima.</p><small>Ogledni vodič · Programi i termini adventa za 2026. nisu potvrđeni ovim previewom.</small>`);
    onOpen?.(c);
  }

  $("#stations").addEventListener("click", (e) => {
    const b = e.target.closest("[data-city]");
    if (b) showCity(Number(b.dataset.city));
  });
  return showCity;
}

/** Vlak vozi po #route, ostaje uspravan i okreće se horizontalno; na kraju se vraća istom trasom. */
export function initTrain() {
  const route = $("#route");
  const train = $("#train");
  if (!route || !train) return;
  const length = route.getTotalLength();

  let travel = 0, direction = 1, facing = 1, displayFacing = 1, last = 0, inView = true;

  new IntersectionObserver((entries) => { inView = entries[0].isIntersecting; }, { rootMargin: "150px" }).observe($("#map"));

  function draw(dt = 16) {
    const d = travel * length;
    const p = route.getPointAtLength(d);
    const a = route.getPointAtLength(Math.max(0, d - LOOKAHEAD));
    const b = route.getPointAtLength(Math.min(length, d + LOOKAHEAD));
    const dx = (b.x - a.x) * direction;
    if (Math.abs(dx) > 2) facing = dx < 0 ? -1 : 1;
    displayFacing += (facing - displayFacing) * (1 - Math.exp(-dt / TURN_SMOOTHING_MS));
    train.setAttribute("transform", `translate(${p.x},${p.y}) scale(${displayFacing},1)`);
  }

  function frame(t) {
    const dt = last ? Math.min(t - last, MAX_FRAME_MS) : 0;
    last = t;
    if (inView && !document.hidden && !reducedMotion.matches) {
      travel += (direction * dt) / TRIP_MS;
      if (travel >= 1) { travel = 2 - travel; direction = -1; }
      else if (travel <= 0) { travel = -travel; direction = 1; }
      draw(dt);
    }
    requestAnimationFrame(frame);
  }

  draw();
  requestAnimationFrame(frame);
}
