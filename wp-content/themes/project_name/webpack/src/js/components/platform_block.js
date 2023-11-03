document.addEventListener("DOMContentLoaded", function() {
    var videos = document.querySelectorAll(".video");

    videos.forEach(function(video) {
        video.addEventListener("click", function() {
            var iframe = this.querySelector("iframe");
            var playButton = this.querySelector(".play");

            iframe.style.zIndex = "0";
            playButton.style.display = "none";
        });
    });
});
