window.addEventListener("load", function() {
  setTimeout(() => {
    const lazyVideos = document.querySelectorAll("video.lazy-video");

    lazyVideos.forEach(video => {
      const src = video.dataset.src;
      if (!src) return;

      const source = document.createElement("source");
      source.src = src;
      source.type = "video/mp4";
      video.appendChild(source);

      video.load();  
      video.play().catch(() => {}); 
    });
  }, 800)
});