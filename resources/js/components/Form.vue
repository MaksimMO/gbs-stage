<template>
  <form @submit.prevent="onSubmit">
    <div class="input-wrapper">
    <input autocomplete="off" v-model="name" type="text" id="name" name="name">
    <label for="name">Ім’я</label>
        <div  v-if="isValid" class="error-message">Дане поле заповнене не коректно</div>
    </div>
    <div class="input-wrapper">
    <input autocomplete="off" v-model="phone" type="number" id="phone" name="phone">
    <label for="phone">Телефон</label>
        <div v-if="isValid" class="error-message">Дане поле заповнене не коректно</div>
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
    },
    computed:{
        //todo
        isValid(){
            return false;
        }
    },
    components:{
        popup
    }
};
</script>

<style scoped>

button{
    margin-top: 35px;
    align-self: center;
}

form{
    display: flex;
    flex-direction: column;
}


.input-wrapper{
    width: 370px;
    height: 69px;
    position: relative;
}



.input-wrapper + .input-wrapper {
    margin-top: 30px;
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

    position: absolute;
    width: 100%;

    font-family: Raleway;
    font-weight: 500;
    font-size: 14px;
    color: #fff;

    border: none;
    outline: none;
    border-bottom: 2px solid rgba(255,255,255, .25);
    background-color: transparent;
    padding: unset;
}



.input-wrapper label {
    position: absolute;
     top: -26px;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
    opacity: 0.55;
    transition:all .3s ease-out;
}

.input-wrapper input:focus + label{
    color: #916C58;
    margin-bottom: 10px;
    font-size: 15px;
    opacity:1;

}

.input-wrapper .error-message{
    color: #916C58;
    align-self: flex-end;
    margin-top: 5px;
}
</style>





