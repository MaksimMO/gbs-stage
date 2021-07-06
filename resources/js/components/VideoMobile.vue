<template>
    <video
      :src="`../../video/${linkVideo}`"
      :autoplay="isSelected"
      muted
      loop
      :poster="`../../images/${linkImage}`"
    />
</template>

<script>

export default {
  props: ['isSelected','linkVideo', 'linkImage']
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

</style>
