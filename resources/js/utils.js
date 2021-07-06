export const preloadLink = (url, type) => {
    let preloadLink = document.createElement("link");
    preloadLink.href = url;
    preloadLink.rel = "preload";
    preloadLink.as = type;
    preloadLink.type = `${type}/mov`;
    document.head.appendChild(preloadLink);
}
