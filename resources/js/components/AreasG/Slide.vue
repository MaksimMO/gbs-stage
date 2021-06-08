<template>
  <div class="slide">
    <div class="header">{{header}}</div>
    <div class="description">{{description}}</div>
    <router-link to="/{{link}}"> {{ $t("view") }}</router-link>
  </div>
</template>

<script>
export default {
    props:['imgUrl', 'header', 'description', 'link' ]
};
</script>

<style>


</style>