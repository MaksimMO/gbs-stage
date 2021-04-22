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

<style >
.phone-link::before{
        background:url('../../assets/images/phone-icon.svg') no-repeat center;
        content: '';
        width: 21px;
        height: 20px;
        position: absolute;
    }
</style>