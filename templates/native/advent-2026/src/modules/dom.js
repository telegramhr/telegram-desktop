export const $ = (selector, root = document) => root.querySelector(selector);

const ESCAPES = { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" };
export const esc = (value) => String(value ?? "").replace(/[&<>"']/g, (c) => ESCAPES[c]);

export const isSafeUrl = (url) => typeof url === "string" && /^https?:\/\//i.test(url);

export const reducedMotion = matchMedia("(prefers-reduced-motion: reduce)");
