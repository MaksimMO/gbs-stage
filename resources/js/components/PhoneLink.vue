<template>
    <!-- <div class="phone-icon"></div> -->
    <!-- <div class="phone-link"> -->
        <a class="phone-link" href="tel:0800355555">0800 355 555</a>
    <!-- </div> -->
</template>

<script>
export default {

}
</script>

<style lang='scss' scoped>

.phone-link{
    font-family: Raleway;
    font-weight: 600;
    font-size: 14px;
    line-height: 16px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    font-feature-settings: 'pnum' on, 'lnum' on;

    color: #FFFFFF;
    transition:color .1s ease-in;
    text-decoration: none;

    display: flex;
    align-items: center;

    &:hover{
        color:#916C58;
    }
}

.phone-link::before{
        background:url('../../assets/images/phone-icon.svg') no-repeat center;
        content: '';
        width: 21px;
        height: 20px;
        margin-right: 7px;
    }
</style>