import { $, esc, isSafeUrl } from "./dom.js";

export function showDialog(html) {
  $("#detailBody").innerHTML = html;
  $("#detail").showModal();
}

function storyArt(story, className) {
  if (story.image) {
    return `<img class="${className} is-photo" src="${esc(story.image)}" alt="${esc(story.image_alt)}" loading="lazy">`;
  }
  return `<div class="${className}" aria-hidden="true">${esc(story.icon)}</div>`;
}
export { storyArt };

export function showStory(story) {
  if (!story) return;
  const hasUrl = isSafeUrl(story.url);
  const note = hasUrl
    ? `Pročitaj cijeli članak na portalu ${esc(story.portal)}.`
    : "Ogledni sadržaj · Poveznica na članak bit će dodana nakon objave.";
  const link = hasUrl
    ? `<a class="pill red article-link" href="${esc(story.url)}">Otkrij više ↗</a>`
    : `<a class="pill red article-link" role="link" aria-disabled="true" title="Poveznica na ovaj članak još nije dodana">Otkrij više ↗</a>`;

  showDialog(`<p class="eyebrow">${esc(story.portal)} · ${esc(story.category)}</p>${storyArt(story, "dialog-art")}<h2>${esc(story.title)}</h2>${story.excerpt ? `<p><em>${esc(story.excerpt)}</em></p>` : ""}${story.body ? `<p>${esc(story.body)}</p>` : ""}<small>${note}</small><br>${link}`);
}

export function showAbout() {
  showDialog('<p class="eyebrow">Borko &amp; Presshaus</p><h2>Otključaj svoj prosinac</h2><p>Kako stižu nove priče s portala Telegram, Super1 i Story, na bor dodajemo nove kuglice. Sve objavljene članke možeš pronaći i ispod bora.</p><p>Zlatne kuglice donose posebne nagradne aktivacije, Adventski vodič vodi te kroz hrvatske gradove, a Borko pomaže pronaći ideju baš za tebe.</p><small>Ovo je interaktivni koncept. Članci, natječaji i razgovor s Borkom prikazani su kao ogledni sadržaji, a ne kao aktivna kampanja.</small>');
}

export function initDialog() {
  const dialog = $("#detail");
  $("#closeDetail").addEventListener("click", () => dialog.close());
  // Klik na backdrop zatvara prozor.
  dialog.addEventListener("click", (e) => {
    if (e.target !== dialog) return;
    const r = dialog.getBoundingClientRect();
    const outside = e.clientX < r.left || e.clientX > r.right || e.clientY < r.top || e.clientY > r.bottom;
    if (outside) dialog.close();
  });
  $("#about")?.addEventListener("click", showAbout);
}
