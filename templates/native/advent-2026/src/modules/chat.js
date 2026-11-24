import { $ } from "./dom.js";

/*
 * DEMO: odgovori prema ključnim riječima. Ovo NIJE AI integracija.
 * Za produkciju: servis na serveru (ključevi nikad u frontendu), preporuke iz stvarnih članaka,
 * stanja slanja / greške / nedostupnosti.
 */
const RULES = [
  { test: /poklon|dar|kuhar/, cats: ["Pokloni", "Recepti"], text: "Za nekoga tko voli kuhati biram nešto što će stvarno koristiti. A uz poklon možeš dodati i nešto domaće!" },
  { test: /keks|recept|kuh|kolac|hrana/, cats: ["Recepti"], text: "Tu sam na domaćem terenu! Krenimo od keksa — možeš ih zadržati za sebe ili spakirati kao mali poklon." },
  { test: /stan|uredi|dom|dekor|bor/, cats: ["Dom"], text: "Za blagdanski ugođaj ne treba ti puno kvadrata. Jedna lijepo uređena polica već radi razliku." },
  { test: /izlet|put|advent|vikend|djec|kamo/, cats: ["Zimske aktivnosti"], text: "Predlažem kratki izlet s dovoljno vremena za šetnju i nešto toplo. U Adventskom vodiču možeš istražiti i pojedine gradove." },
  { test: /ljep|njeg|lice|koz/, cats: ["Ljepota"], text: "Imam ideju za mali ritual i poklon prilagođen osobi kojoj daruješ." },
  { test: /odjec|stil|nositi|outfit/, cats: ["Stil"], text: "Krenimo od omiljenih komada koje već imaš i dodajmo jedan svečaniji detalj." },
];
const FALLBACK = { cats: ["Recepti", "Pokloni", "Zimske aktivnosti"], text: "U ovom demo razgovoru mogu ti predložiti poklone, recepte, uređenje doma i zimske izlete. Evo nekoliko ideja za početak:" };
const TRAVEL = /izlet|put|advent|vikend|kamo/;

const MAX_SUGGESTIONS = 2;

/** Prve preporuke iz zadanih kategorija (najviše MAX_SUGGESTIONS po kategoriji). */
const pickStories = (stories, cats) =>
  cats.flatMap((cat) => stories.filter((s) => s.category === cat).slice(0, MAX_SUGGESTIONS));

const normalize = (q) => q.toLowerCase().normalize("NFD").replace(/[̀-ͯ]/g, "");

export function initChat({ stories, cities, showStory, showCity }) {
  const chat = $("#chat");
  const askHero = $("#askHero");

  function setOpen(open) {
    chat.classList.toggle("open", open);
    askHero.setAttribute("aria-expanded", String(open));
  }
  function openChat() {
    $("#tree").scrollIntoView({ behavior: "smooth", block: "center" });
    setOpen(true);
    $("#question").focus({ preventScroll: true });
  }
  function closeChat() {
    setOpen(false);
    askHero.focus({ preventScroll: true });
  }

  function message(text, user = false) {
    const b = document.createElement("div");
    b.className = "bubble" + (user ? " user" : "");
    b.textContent = text;
    $("#messages").append(b);
    return b;
  }
  function action(bubble, label, onClick) {
    const btn = document.createElement("button");
    btn.type = "button";
    btn.textContent = label;
    btn.addEventListener("click", onClick);
    bubble.append(btn);
  }

  function answer(q) {
    if (!q.trim()) return;
    message(q, true);
    const n = normalize(q);
    const cityIndex = cities.findIndex((c) => n.includes(normalize(c.name)));

    if (cityIndex >= 0) {
      const city = cities[cityIndex];
      const b = message(`${city.name}? Dobar izbor! Imam jednu stanicu baš za tebe.`);
      action(b, `Otkrij ${city.name} →`, () => showCity(cityIndex));
    } else {
      const rule = RULES.find((r) => r.test.test(n)) ?? FALLBACK;
      const b = message(rule.text);
      pickStories(stories, rule.cats).forEach((s) => action(b, `${s.title} →`, () => showStory(s)));
      if (TRAVEL.test(n)) {
        action(b, "Ukrcaj se u Adventski vodič →", () => {
          closeChat();
          location.hash = "adventski-vodic";
        });
      }
    }
    $("#messages").scrollTop = $("#messages").scrollHeight;
  }

  askHero.addEventListener("click", openChat);
  $("#closeChat").addEventListener("click", closeChat);
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && chat.classList.contains("open")) closeChat();
  });
  $("#chatForm").addEventListener("submit", (e) => {
    e.preventDefault();
    answer($("#question").value);
    $("#question").value = "";
  });
  document.querySelectorAll("[data-query]").forEach((b) => b.addEventListener("click", () => answer(b.dataset.query)));
}
