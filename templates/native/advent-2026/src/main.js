import { loadData } from "./modules/data.js";
import { initDialog, showStory } from "./modules/dialog.js";
import { initCarousels } from "./modules/carousel.js";
import { createTree } from "./modules/tree.js";
import { createStations, initTrain } from "./modules/train.js";
import { initChat } from "./modules/chat.js";

window.addEventListener("DOMContentLoaded", () => {
  const data = loadData();
  const byId = new Map(data.stories.map((s) => [s.id, s]));
  const openStory = (id) => showStory(byId.get(id));

  initDialog();
  createTree(data, openStory);
  initCarousels(openStory);
  const showCity = createStations(data.cities);
  initTrain();
  initChat({ ...data, showStory, showCity });
});
