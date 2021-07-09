<template>
  <ul class="main-menu-s">
      <li>
          <router-link to="/areas-s">Послуги</router-link>
      </li>
      <li>
          <router-link to="/price-s">Ціни</router-link>
      </li>
      <li>
          <router-link to="/contacts-s">Контакти</router-link>
      </li>
      <li class="navigation-mobile">
          <NavigationMobile />
      </li>
  </ul>
</template>

<script>
import NavigationMobile from './navigationMobile.vue';
export default {
    components: {
        NavigationMobile
    },
};
</script>

<style lang="scss">
    .main-menu-s{
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
        & li{
            transition: all .6s ease-in-out;
            white-space: nowrap;
        }
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
    .navigation-mobile{
        display: none;
    }
    @media screen and (max-width: 1023px) and (min-width: 768px){
        .main-menu-s {
            height: 100vh;
            display: block;
            padding: 1.87rem 0 0 0;
            li{
                margin-bottom: 35px;
            }
            li > a {
                opacity: 1;
            }
        }

    }
    @media screen and (max-width: 767px){
        .main-menu-s {
            display: block;
            padding: 1.87rem 0 0 0;
            li{
                margin-bottom: 35px;
            }
            li > a {
                opacity: 1;
            }
        }
        .navigation-mobile{
            display: block;
            padding: 26px;
        }

    }

</style>
