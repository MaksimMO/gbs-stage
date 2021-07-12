export const preloadLink = (url, type) => {
    let preloadLink = document.createElement("link");
    preloadLink.href = require(`../assets/${url}`).default;;
    preloadLink.rel = "preload";
    preloadLink.as = type;
    document.head.appendChild(preloadLink);
}

export const preloadLinkVideo = (url, type) => {
    let preloadVideo = document.createElement("link");
    preloadVideo.href = require(`../assets/video/${url}`).default;
    preloadVideo.rel = "prefetch";
    preloadVideo.as = type;
    document.head.appendChild(preloadVideo);
}