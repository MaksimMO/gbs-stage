<template>
  <form @submit.prevent="onSubmit" :class="$attrs.class" >

    <div class="input-wrapper">
        <input autocomplete="off" v-model="name" type="text" id="name" name="name" placeholder=" ">
        <label for="name">Ім’я</label>
        <div :style="{opacity: (name.length === 0 && isShowValidationMessage) ? 1 : 0}" class="error-message">Дане поле заповнене не коректно</div>
    </div>
    <div class="input-wrapper">
        <input autocomplete="off" v-model="phone" id="phone" name="phone" placeholder=" ">
        <label for="phone">Телефон</label>
        <div :style="{opacity: (phone.length === 0 && isShowValidationMessage) ? 1 : 0}" class="error-message">Дане поле заповнене не коректно</div>
    </div>
    <div class="input-wrapper">
        <input autocomplete="off" v-model="email" id="email" name="email" placeholder=" ">
        <label for="email">E-mail</label>
        <div :style="{opacity: (email.length === 0 && isShowValidationMessage) ? 1 : 0}" class="error-message">Дане поле заповнене не коректно</div>
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
    props:{
        level:String,
        choiceLevel:String,
        successPopup:{
            type:Boolean,
            default:true
        }
     },
    data(){
        return {
            csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            name:'',
            phone:'',
            email:'',
            modalOpen:false,
            isShowValidationMessage: false,
        }
    },
    methods:{
        onSubmit(e){
            if (!this.isValid()){
                return;
            }

            let body = new FormData();
            body.append('name', this.name);
            body.append('phone_number', this.phone);
            body.append('email', this.email);
            body.append('level', this.level);
            body.append('_token', this.csrf_token);
            body.append('description', `Абонимент ${this.choiceLevel}`);

            fetch('/feedback-form', {method:'POST', body}).finally(()=>{
                if(this.successPopup){
                    this.modalOpen=true;
                }

                this.$emit('submitSuccess');

                // if(this.level==='g'){
                //     this.$emit('submitSuccess');
                // }else{
                //     this.modalOpen=true;
                // }

            });

        },
        isValid(){
            this.isShowValidationMessage = this.name.length === 0 || this.phone.length === 0;
            return !this.isShowValidationMessage;
        }
    },
    computed:{
    },
    components:{
        popup
    }
};
</script>

<style lang="scss" scoped>

button{
    margin-top: 35px;
    align-self: center;
}

form{
    display: flex;
    flex-direction: column;

    @media screen and (max-width: 767px) {
        width: 80%;
    }
}


.input-wrapper{
    width: 370px;
    height: 69px;
    position: relative;

    @media screen and (max-width: 767px) {
        width: unset;
        height: 50px;
    }
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


@mixin activeLable{
    color: #916C58;
    margin-bottom: 10px;
    font-size: 15px;
    opacity:1;

    @media screen and (max-width: 767px) {
       font-size: 12px;
    }
}

input{
    position: absolute;
    width: 100%;
    height:25px;
    font-family: Raleway;
    font-weight: 500;
    font-size: 16px;
    color: #fff;
    border: none;
    outline: none;
    background-color: transparent;
    padding: unset;
    border-bottom: 2px solid rgba(255,255,255, .25);
    transition: border-bottom .2s ease-out;

    &:focus {
        border-bottom: 2px solid rgba(255,255,255, 1);
    }

    &:focus, &:not(:placeholder-shown){
         & + label{
             @include activeLable;
         }
    }

    @media screen and (max-width: 767px) {
        font-size: 14px;
    }

}

.invert{

    input{


        color: #000;
        border-bottom: 2px solid rgba(0,0,0, .25);

        &:focus {
            border-bottom: 2px solid rgba(0,0,0, .78);
        }
    }

    label{
        color:rgba(0,0,0, .55);
    }
}

 label {
    font-family: Raleway;
    position: absolute;
    top: -26px;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
    opacity: 0.55;
    transition:all .2s ease-out;

    @media screen and (max-width: 767px) {
        font-size: 16px;
        line-height: 18px;
        top: -17px;
    }
}

.error-message{
    color: #916C58;
    position: absolute;
    top: 30px;
    right:0;
    transition: opacity .2s ease-out;

    font-family: Raleway;
    font-weight: 500;
    font-size: 14px;
}
</style>





