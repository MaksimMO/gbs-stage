export const preloadLink = (url, type) => {
    let preloadLink = document.createElement("link");
    preloadLink.href = require(`../assets/${url}`).default;
    preloadLink.rel = "preload";
    preloadLink.as = type;
    document.head.appendChild(preloadLink);
}
