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
            <div class="work-period">
                <p class="work-title">Години роботи:</p>
                <p class="work-time">Пн - Пт з 07:00 до 23:00</p>
                <p class="work-time">Сб - Нд з 08:00 до 23:00</p>
            </div>
            <div class="contact-social-networks">
                <p>Ми у соц.мережах: </p>
                <span>
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
                </span>
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
                margin-left: 66px;
                font-family: Oswald;
                font-style: normal;
                font-weight: 600;
                font-size: 22px;
                line-height: 33px;
                letter-spacing: 0.02em;
                font-feature-settings: 'pnum' on, 'lnum' on;
                color: #000000;

                & p {
                    display: inline-block;
                    margin: 0;
                    margin-right: 36px;
                }
                & span {
                    white-space: nowrap;
                }
                & span p {
                    margin: 0;
                    display: inline-block;
                    margin-right: 36px;
                }
                & > span > a{
                    text-decoration: none;
                    width: 24px;
                    height: 24px;
                    margin-right: 36px;
                }
            }
        }
    }
    .work-period {
       margin-left: 66px;
       margin-bottom: 50px;
       & .work-title {
            font-family: Oswald;
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 33px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
            margin: 0;
            margin-bottom: 20px;
       }
       & .work-time{
            font-family: Raleway;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
            margin: 0;
            margin-bottom: 10px;
       }
    }
    .location-map {
        margin-bottom: 60px;
        &::v-deep(button) {
            transform: unset;
        }
    }
    @media screen and (max-width: 1123px) and (min-width: 768px) {
        .contacts {
            padding-top: 108px;
        }
        .title {
            padding: 0 50px;
            margin-bottom: 20px;
        }
        .title > h1 {
            font-size: 49px;
            margin-left: 57px;
            margin-bottom: 0;
        }
        .location {
            padding: 0 50px;
            margin-bottom: 30px;
            display: block;

            & .location-contact {
                font-size: 16px;
                padding-top: 0;
                margin-right: 0;
                margin-bottom: 30px;
                & .contact-social-networks {
                    text-align: left;
                }
            }
        }
        .work-period {
            margin-bottom: 30px;
            & .work-title {
                    font-size: 20px;
                    line-height: 30px;
            }
            & .work-time{
                    font-size: 16px;
            }
            }
        .location-map {
            & .vue-map-container {
                width: 100% !important;
            }
        }
    }
    @media screen and (max-width: 767px) {
        .contacts {
            padding-top: 108px;
        }
        .title {
            padding: 0 15px;
            margin-bottom: 20px;
        }
        .title > h1 {
            font-size: 32px;
            margin-left: 48px;
            margin-bottom: 0;
        }
        .location {
            padding: 0 15px;
            margin-bottom: 30px;
            display: block;
            & .location-contact {
                padding-top: 0;
                font-size: 14px;
                margin-right: 0;
                margin-bottom: 30px;
                .contact-address {
                    & p {
                        line-height: 18px;
                    }
                }

                & .contact-social-networks {
                    text-align: left;
                    font-size: 18px;
                    & p {
                        margin-right: 26px;
                    }
                    & span p {
                        margin-right: 26px;
                    }
                    & > span > a{
                        margin-right: 26px;
                    }
                }
            }
        }
        .work-period {
            margin-bottom: 30px;
            & .work-title {
                font-size: 18px;
                line-height: 30px;
            }
            & .work-time{
                font-size: 14px;
            }
        }
        .location-map {
            & .vue-map-container {
                width: 100% !important;
            }
        }
    }

</style>

