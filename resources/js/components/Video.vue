<template>
    <video
      ref="video"
      src="https://cdn.theguardian.tv/webM/2015/07/20/150716YesMen_synd_768k_vp8.webm"
      @mouseover="playVideo"
      @mouseleave="stopVideo"
      muted
    />
</template>

<script>
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "Video",
  setup(props) {
    const video = ref(null);
    const videoElement = ref(null);
    const paused = ref(null);
    const playVideo = () => {
      video.value.play();
    };
    const stopVideo = () => {
      video.value.pause();
      video.value.currentTime = 0;
    };

    return {
      video,
      videoElement,
      paused,
      playVideo,
      stopVideo,
    };
  },
});
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

</style>
