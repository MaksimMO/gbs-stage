<template>
    <div class="main-menu-mobile">
        <div class="appointment-mobile" @click="modalOpen=true">Записатися</div>
        <ul >
            <li>
                <router-link to="/areas-s">Послуги</router-link>
            </li>
            <li>
                <router-link to="/price-s">Ціни</router-link>
            </li>
            <li>
                <router-link to="/contacts-s">Контакти</router-link>
            </li>
        </ul>
        <div class="address-mobile">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
        <div style="padding: 26px">
            <NavigationMobile />
        </div>
        <teleport to="body">
            <MakeOrderPopup v-if="modalOpen" @closePopup="modalOpen=false"/>
        </teleport>
    </div>
</template>

<script>
import MakeOrderPopup from './MakeOrderPopup.vue';
import NavigationMobile from './navigationMobile.vue';
export default {
    data() {
        return {
            modalOpen:false
        };
    },
    components: {
        MakeOrderPopup,
        NavigationMobile
    },
};
</script>

<style lang="scss">
.main-menu-mobile{
    padding-top: 1.87rem;
    ul {
        font-family: Raleway;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 16px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        list-style-type: none;
        padding: 0;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 0;
        li{
            transition: all .6s ease-in-out;
            margin-bottom: 25px;
        }
        li > a {
            text-decoration: none;
            color: #fff;
            transition:opacity .2s ease-in;
        }
    }
    .appointment-mobile{
        font-family: Raleway;
        font-style: normal;
        font-weight: 800;
        font-size: 14px;
        line-height: 16px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        width: 138px;
        text-align: center;
        transition: all 0.6s linear;
        position: relative;
        cursor:pointer;
        z-index: 1;
        margin: 0 auto;
        margin-bottom: 40px;
        &:before{
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: #916C58;
            z-index: -1;
            transition: all 0.2s linear;
        }
        &:hover:before{
            height: 100%;
        }
        &:active{
            color: #000;
        }
    }
    .address-mobile {
        font-weight: bold;
        font-size: 14px;
        line-height: 16px;
        text-align: center;
        letter-spacing: 0.1em;
        margin-top: 66px;
        margin-bottom: 30px;
  }
}


</style>
