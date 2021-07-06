<template>
    <video
      ref="video"
      :src="`../../video/${linkVideo}`"
      @mouseover="playVideo"
      @mouseleave="stopVideo"
      muted
      loop
      :poster="`../../images/${linkImage}`"
    />
</template>

<script>
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "Video",
  props: ['linkVideo', 'linkImage'],
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
