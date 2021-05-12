<template>

  <ul class="main-menu">
      <li>
          <router-link to="/about-us-g">Про нас</router-link>
      </li>
      <li>
          <router-link to="/">Зонування</router-link>
      </li>
      <li>
          <router-link to="/">Наша команда</router-link>
      </li>
      <li>
          <router-link to="/">Тренажери</router-link>
      </li>
      <li>
          <router-link to="/">Комфорт і чистота</router-link>
      </li>
      <li>
          <router-link to="/">Фітнес бар</router-link>
      </li>
      <li>
          <router-link to="/">Безпека</router-link>
      </li>
  </ul>
</template>

<script>
export default {

};
</script>

<style lang="scss">
    .main-menu{
        font-family: Raleway;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 16px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        list-style-type: none;
        padding: 1.87rem 1.25rem 0 6.25rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        grid-row-gap: 5px;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        margin: 0;
    }
    li{
        transition: all .6s ease-in-out;
    }
    li > a {
        text-decoration: none;
        color: #fff;
    }

</style>
