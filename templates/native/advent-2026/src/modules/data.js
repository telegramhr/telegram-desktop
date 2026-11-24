const EMPTY = { categories: ["Sve kuglice"], stories: [], cities: [] };

/** Sadržaj dolazi iz inc/data.php kroz <script type="application/json" id="advent-data">. */
export function loadData() {
  const node = document.getElementById("advent-data");
  if (!node) {
    console.error("[advent-2026] Nedostaje #advent-data");
    return EMPTY;
  }
  try {
    const data = JSON.parse(node.textContent);
    return {
      categories: Array.isArray(data.categories) ? data.categories : EMPTY.categories,
      stories: Array.isArray(data.stories) ? data.stories : [],
      cities: Array.isArray(data.cities) ? data.cities : [],
    };
  } catch (error) {
    console.error("[advent-2026] Neispravan JSON sadržaja", error);
    return EMPTY;
  }
}
