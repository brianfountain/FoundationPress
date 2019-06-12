<?php
/**
 * Template part for full width embedded video
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="page-feature" style="background-image: url(https://placehold.it/1800x1200/000000/333333/?text=Background+Image)">

    <div class="page-feature-content">
        <h1>UCI Strategist Plan</h1>
        <a class="button primary large">Read More</a>
    </div>

    <div class="hero-video">
        <div class="hero-video-container">
            <div id="muteYouTubeVideoPlayer"></div>
        </div>
    </div>

</div>

<script async src="https://www.youtube.com/iframe_api"></script>

<script>
    function onYouTubeIframeAPIReady() {
        var player;
        player = new YT.Player('muteYouTubeVideoPlayer', {
            videoId: 'HePIgr7ke2M', // YouTube Video ID
            playerVars: {
                autoplay: 1, // Auto-play the video on load
                controls: 0, // Show pause/play buttons in player
                showinfo: 0, // Hide the video title
                modestbranding: 1, // Hide the Youtube Logo
                loop: 1, // Run the video in a loop
                fs: 0, // Hide the full screen button
                cc_load_policy: 0, // Hide closed captions
                iv_load_policy: 3, // Hide the Video Annotations
                autohide: 0, // Hide video controls when playing
                rel: 0
            },
            events: {
                onReady: function(e) {
                    e.target.mute();
                    $("#muteYouTubeVideoPlayer").removeAttr("height").removeAttr("width");
                }
            }
        });

    }
</script>
