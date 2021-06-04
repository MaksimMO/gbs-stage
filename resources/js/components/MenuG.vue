<template>
  <ul class="main-menu">
      <li>
          <router-link to="/about-us-g">Про нас</router-link>
      </li>
      <li>
          <router-link to="/areas-g">Зонування</router-link>
      </li>
      <li>
          <router-link to="/team-g">Наша команда</router-link>
      </li>
      <li>
          <router-link to="/simulators-g">Тренажери</router-link>
      </li>
      <li>
          <router-link to="/tickets-g">Абонементи</router-link>
      </li>
      <li>
          <router-link to="/contacts-g">Контакти</router-link>
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
        display: flex;
        grid-column-gap: 60px;
        justify-content: center;
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
        transition:opacity .2s ease-in;
        opacity:.55;

        &:hover{
            opacity:1;
        }
    }

</style>
