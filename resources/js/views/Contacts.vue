<template>
<Header class="header-invert"/>
  <div class="contacts">
      <section class="title">
          <h1>Контакти</h1>
      </section>
      <section class="location">
        <div class="location-contact">
            <div class="contact-address">
                <p>м. Вінниця, вул. Келецька, 78В ТСК «Магігранд», 3 поверх</p>
            </div>
            <div class="contact-phone">
                <p>0800 355 555</p>
            </div>
            <div class="contact-social-networks">
                <p>Ми у соц.мережах: </p>
                <a v-show="$root.$data.area == 'g' || $root.$data.area == 's'" href="https://www.facebook.com/gbs.level" class="facebookGold">
                    <img src="../../assets/images/facebookGold.svg"  alt="facebook"/>
                </a>
                <a v-show="$root.$data.area == 'b'" href="https://www.facebook.com/blevel.gbs" class="facebookGold">
                    <img src="../../assets/images/facebookGold.svg"  alt="facebook"/>
                </a>
                <a v-show="$root.$data.area == 'g' || $root.$data.area == 's'" href="https://www.instagram.com/gbs.level" class="instagramGold">
                    <img src="../../assets/images/instagramGold.svg" alt="instagram"/>
                </a>
                <a v-show="$root.$data.area == 'b'" href="https://www.instagram.com/blevel.gbs" class="instagramGold">
                    <img src="../../assets/images/instagramGold.svg" alt="instagram"/>
                </a>
            </div>
        </div>
        <div class="location-map">
            <GMapMap
                :center="center"
                :zoom="15"
                map-type-id="terrain"
                style="width: 659px; height: 487px;"
            >
                <GMapMarker
                    :position="markersPosition"
                    title="GBS LEVEL"
                    infoText="GBS LEVEL"

                />
            </GMapMap>
        </div>
      </section>
  </div>
<Footer/>
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
export default {
    data() {
        return {
            center: {lat: 49.22581, lng: 28.41255},
            markersPosition: {
                lat: 49.22581, lng: 28.41255
            }
        }
    },
    components: {
        Header,
        Footer,
    }
}

</script>

<style lang="scss" scoped>
    .contacts {
        padding-top: 208px;
        background-color: #FFFFFF !important;
        margin-bottom: 60px;
    }
    .title {
        padding: 0 7.81vw;
        margin-bottom: 60px;
    }
    .title > h1 {
        font-weight: 600;
        font-style: normal;
        font-family: 'Oswald';
        font-size: 52px;
        margin: 0;
        margin-left: 96px;
        margin-bottom: 30px;
        line-height: 54px;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
    }
    .location {
        padding: 0 9.81vw;
        margin-bottom: 60px;
        display: flex;
        & .location-contact {
            font-family: Raleway;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 54px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
            padding-top: 48px;
            margin-right: 96px;
            margin-bottom: 60px;
            & .contact-address {
                margin-bottom: 30px;
                display: flex;
                & p {
                    margin: 0;
                    width: 90%;
                }
            }
            & .contact-address::before{
                    background-color: rgba(145, 08, 88, .15);
                    border-radius: 50%;
                    display: inline-block;
                    content: url('../../assets/images/marker.svg');
                    width: 46px;
                    height: 46px;
                    text-align: center;
                    margin-right: 20px;
                }
            & .contact-phone {
                margin-bottom: 30px;
                & p {
                    margin: 0;
                }
                & p::before{
                    background-color: rgba(145, 08, 88, .15);
                    border-radius: 50%;
                    display: inline-block;
                    content: url('../../assets/images/phone-icon.svg');
                    width: 46px;
                    height: 46px;
                    text-align: center;
                    margin-right: 20px;
                }
            }
            & .contact-social-networks {
                width: 100%;
                text-align: center;
                font-family: Oswald;
                font-style: normal;
                font-weight: 600;
                font-size: 22px;
                line-height: 33px;
                letter-spacing: 0.02em;
                font-feature-settings: 'pnum' on, 'lnum' on;
                color: #000000;

                & p {
                    margin: 0;
                    display: inline-block;
                    margin-right: 36px;
                }
                & > a{
                    text-decoration: none;
                    width: 24px;
                    height: 24px;
                    margin-right: 36px;
                }
            }
        }
    }
    .location-map {
        margin-bottom: 60px;
        &::v-deep(button) {
            transform: unset;
        }
    }
    .footer {
        height: 234px;
    }
</style>

