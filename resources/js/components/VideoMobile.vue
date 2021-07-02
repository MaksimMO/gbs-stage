<template>
    <video
      src="https://cdn.theguardian.tv/webM/2015/07/20/150716YesMen_synd_768k_vp8.webm"
      :autoplay="isSelected"
      muted
    />
</template>

<script>

export default {
  props: ['isSelected']
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

</style>
