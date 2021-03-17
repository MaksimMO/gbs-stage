<template>
  <form @submit.prevent="onSubmit">
    <div class="input-wrapper">
    <input autocomplete="off" v-model="name" type="text" id="name" name="name">
    <label for="name">Ім’я</label>
        <div class="error-message">Дане поле заповнене не коректно</div>
    </div>
    <div class="input-wrapper">
    <input autocomplete="off" v-model="phone" type="number" id="phone" name="phone">
    <label for="phone">Телефон</label>
        <div class="error-message">Дане поле заповнене не коректно</div>
    </div>
        <button type="submit"><span>Залишити заявку</span></button>
    </form>

    <teleport to="body">
        <popup v-if="modalOpen"/>
    </teleport>
</template>

<script>
import popup from './Popup.vue'
export default {
    data(){
        return {
            name:'',
            phone:'',
            modalOpen:false
        }
    },
    methods:{
        onSubmit(e){
            let body = new FormData();
            body.append('name', this.name);
            body.append('phone', this.phone);

            fetch('/feedback-form', {method:'POST', body}).finally(()=>{
                this.modalOpen=true;
                // alert('ok');
            });

        },
        valid(){
            return false;
        }
    },
    components:{
        popup
    }
};
</script>

<style>

button{
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 35px;
}


button{
    transform: skew(150deg);
    border: none;
    outline: none;
    padding: 15px;
    background: #916C58;
    color: white;
    cursor: pointer;


    font-family: Raleway;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 16px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

button span{
    transform: skew(-150deg);
    display: inline-block;
}

.input-wrapper{
    display:flex;
    flex-direction:column;
}

.input-wrapper label {
    order: -1;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
    opacity: 0.55;
}

.input-wrapper + .input-wrapper {
    margin-top: 10px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type=number] {
    -moz-appearance: textfield;
  }


.input-wrapper input{
    font-family: Raleway;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 16px;
    color: #fff;

    border: none;
    outline: none;
    border-bottom: 2px solid rgba(255,255,255, .25);
    background-color: transparent;
    padding: unset;
    height: 25px;
    width: 370px;
}



.input-wrapper input:focus + label{
    background-color: red;

}

.input-wrapper .error-message{
    color: #916C58;
    align-self: flex-end;
}
</style>





