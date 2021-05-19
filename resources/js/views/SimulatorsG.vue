<template>
<Header class="header-invert" />
  <div class="simulator-g">
      <section class="title">
          <h1>Тренажери</h1>
          <p>
            Спортивний клуб «G level» оснащений найновішою преміум-лінійкою тренажерів від провідного світового бренду TechnoGym.
          </p>
          <p>
            TechnoGym - лідер серед виробників тренажерів, завдяки використанню останніх наукових відкриттів та технічних досягнень.
            Тренажери продумані до найдрібніших деталей, тому на них щодня тренується більше 35 мільйонів спортсменів,
            які досягають найвищих спортивних результатів. А відтепер і ви зможете відчути їх унікальність.
          </p>
          <div class="logo"></div>
      </section>
      <section class="simulator-direction">
          <ul class="direction">
            <li @click="direction = 'upper_boddy'" :class="{'invert-color': direction == 'upper_boddy'}">Верхня частина тіла</li>
            <li @click="direction = 'lower_boddy'" :class="{'invert-color': direction == 'lower_boddy'}">Нижня частина тіла</li>
            <li @click="direction = 'cardio'" :class="{'invert-color': direction == 'cardio'}">Кардіо</li>
            <li @click="direction = 'multifunction_simulators'" :class="{'invert-color': direction == 'multifunction_simulators'}">Багатофункціональні тренажери</li>
            <li @click="direction = 'free_weights'" :class="{'invert-color': direction == 'free_weights'}">Вільні ваги</li>
        </ul>
        <ul class="simulator">
            <li v-for="(simulator)  in directionCheck" :key="simulator.id" @click="openDateil(simulator.id)">
                <img :src="simulator.link" :alt="simulator.name">
                <div>{{simulator.name}}</div>
            </li>
        </ul>
      </section>
    </div>
    <teleport to="body">
      <PopupDetail v-if="isModalOpen"  @closePopup="isModalOpen = false" :simulatorDetail="simulatorDetail"/>
    </teleport>
<Footer />
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import PopupDetail from '../components/PopupDetail.vue'
export default {
    data() {
        return {
            isOpen: false,
            isModalOpen: false,
            direction: 'upper_boddy',
            simulatorDetail: null,
            simulators: [
                {id: 1, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер «вертикальна тяга» Vertical Traction", description: "Тренажер Vertical Traction призначений для розвитку найбільших м'язів верхньої частини тіла - найширших м'язів спини."},
                {id: 2, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер «жим від плеча вгору» Shoulder Press", description: "Тренажер Shoulder Press дозволяє виконувати базове для дельтоподібних м'язів вправа - «армійський жим» в положенні сидячи."},
                {id: 3, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер «жим від грудей» Chest Press", description: "Тренажер Chest Press дає можливість виконувати базова вправа для грудних м'язів - жим від грудей."},
                {id: 4, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Багатофункціональний тренажер Dual Pec/Rev Fly", description: "Тренажер Dual Pectoral / Reverse Fly призначений для виконання двох вправ - «зведення рук» зміцнює м'язи грудей, додаткове навантаження отримують передній пучок дельтоподібних м'язів і біцепс плеча; «Розведення рук» зміцнює задній пучок дельтоподібних м'язів, додаткове навантаження отримують ромбовидні і трапецієподібні м'язи."},
                {id: 5, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер PULLDOWN N «вертикальна тяга» з дисковим навантаженням", description: "Тренажер призначений для вертикальної тяги до грудей в положенні сидячи. Вправа розвиває найширші м'язи спини, додаткове навантаження отримує біцепс плеча."},
                {id: 6, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер «гребна тяга» Low Row", description: "Тренажер Low Row дозволяє зміцнити найширші м'язи спини, виконуючи одне з базових вправ - горизонтальну тягу."},
                {id: 7, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер «жим від грудей з широким хватом» з дисковим навантаженням", description: "Wide Chest Press - тренажер дозволяє виконувати вправи, що нагадують руху на підйом гантелей, лежачи на лаві з негативним нахилом із задіянням нижній частині грудних м'язів."},
                {id: 8, direction: "upper_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер Incline chest press «жим від грудей під кутом» з дисковим навантаженням", description: "Incline Chest Press - тренажер повторює рухи на відведення гантелей на похилій лаві з залученням м'язів верхньої частини грудей."},
                {id: 9, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Багатофункціональний тренажер для ніг Dual Abd", description: "Тренажер Dual Abductor / Adductor дозволяє виконувати дві вправи - «зведення ніг» зміцнює що приводять м'язи стегна; «Розведення ніг» навантажує сідничні м'язи"},
                {id: 10, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер «розгинання ніг» Leg Extension", description: "Тренажер Leg Extension дає можливість виконувати вправу «розгинання ніг в положенні сидячи» для розвитку найбільших м'язів ніг - квадріцепсов"},
                {id: 11, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер «згинання ніг лежачи» Ne Leg Curl", description: "Тренажер для тренування задньої поверхні стегна. Легко налаштовується для використання атлетами різного зросту."},
                {id: 12, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер Calf для литкових м’язів з дисковим навантаженням", description: "Опрацювання литкових м'язів на цьому тренажері можлива без навантаження на хребетний стовп. Ефективність вправ настільки ж висока, як і при заняттях у вільній вазі завдяки використанню атлетичних дисків. Матеріал BODY PRINT приймає форму фігури спортсмена, роблячи заняття гранично комфортними."},
                {id: 13, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер REAR KICK для сідничних м’язів з дисковим навантаженням", description: "Широка амплітуда вправи дозволяє тренувати сідниці в максимально природних умовах і для ефективного результату"},
                {id: 14, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер LINEAR LEG PRESS «жим ногами» з дисковим навантаженням", description: ""},
                {id: 15, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер LEG PRESS", description: "Ця модель тренажера дозволяє ефективно опрацювати всі м'язи ніг від сідниць до литкових."},
                {id: 16, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер LEG CURL", description: "Тренажер серії SELECTION 700 для цільових тренувань м`язів задньої поверхні стегна."},
                {id: 17, direction: "lower_boddy", link: require("../../assets/images/simulator-default.jpg").default, name: "Тренажер Hack Squat", description: "Тренажер «Гакк-присідання» для тренування м'язів ніг і сідничних м'язів"},
                {id: 18, direction: "cardio", link: require("../../assets/images/simulator-default.jpg").default, name: "Бігова доріжка Run Live 500", description: "У біговій доріжці Excite Live Run немає нічого, що може зашкодити вашому бігу. Низьке бігове полотно зручно для заходу на тренажер. Бічні ручки вкорочені і не утрудняють рухів руками. Біжіть вільно, як по доріжці в парку."},
                {id: 19, direction: "cardio", link: require("../../assets/images/simulator-default.jpg").default, name: "Орбітрек Synchro Live 700", description: "Excite Live Synchro - тренажер, який захоплює тренуваннями і кожен день знаходить нові приводи для натхнення і прогресу. Регульована рампа від 5 до 33 градусів дозволяє опрацювати м'язи ніг і сідничні м'язи. Сучасна консоль поєднує масу програм тренувань і додатків для розваги. Плавні махові руху без ривків і ударного навантаження на суглоби з довжиною кроку до 67 см - це новий орбітрек Excite Live Synchro. Високі платформи і мінімум деталей з боків дарують відчуття свободи і ефективного тренування без зусиль."},
                {id: 20, direction: "cardio", link: require("../../assets/images/simulator-default.jpg").default, name: "Велотренажер Bake Live 500", description: "Неймовірно реалістичний вертикальний велотренажер Excite Live Bike для кардіотренувань. Зручне кермо з кількома хватами, широка і низька рама, прості регулювання. Екран консолі, кермо, сидіння і педалі розташовані максимально природно для правильного положення тіла і різних типів тренування."},
                {id: 21, direction: "cardio", link: require("../../assets/images/simulator-default.jpg").default, name: "Велотренажер Recline live 500", description: "Велотренажер Excite Live Recline для кардиотренировок в зручному положенні сидячи. Широкий отвір для простий посадки, сенсорний кермо для контролю пульсу, технологічна консоль з програмами тренувань і розвагами для прогресу і мотивації."},
                {id: 22, direction: "cardio", link: require("../../assets/images/simulator-default.jpg").default, name: "Кросс-тренажер Climb Live 500", description: "Тренажер високих досягнень для кардиотренировки «підйом по сходах». Допомагає набути впевненості в собі, вийти за межі своїх можливостей і досягати нових результатів. Поєднує компактність, безпечну конструкцію, різноманітні програми тренувань і розваги. Підніміть свої тренування на новий рівень з конструкцією тренажера Excite Live Climb, яка максимально навантажує цільові сідничні м'язи і м'язи ніг. Тренуйтеся з комфортом і видимим результатом."},
                {id: 23, direction: "cardio", link: require("../../assets/images/simulator-default.jpg").default, name: "Спинбайк Group Cycle Connect", description: "Group Cycle Connect це перший в світі і єдиний велотренажер для закритих приміщень, який відстежує результати тренувань і забезпечує підтримку користувачів для поліпшення результатів за допомогою тренувань з повним зануренням у віртуальне середовище. У ньому поєднується унікальний дизайн з новітньою технологією зв'язку, приголомшливі відчуття і не має аналогів простота використання."},
                {id: 24, direction: "multifunction_simulators", link: require("../../assets/images/simulator-default.jpg").default, name: "Багатофункціональний тренажер Multipower", description: "MULTIPOWER - мультистанция для силових тренувань у вільній вазі і фіксованою траєкторією руху, на якій можна виконувати базові та ізолюючі вправи."},
                {id: 25, direction: "multifunction_simulators", link: require("../../assets/images/simulator-default.jpg").default, name: "Багатофункціональний тренажер Dual Adjustable Pulley", description: "DUAL ADJUSTABLE PULLEY є самою останньою новинкою в лінійці силових тренажерів Element +. Завдяки ергономічному дизайну і передової біомеханіки, новий тросовий тренажер дозволяє користувачам виконувати толкательние вправи для максимального збільшення сили, потужності і швидкості руху."},
                {id: 26, direction: "multifunction_simulators", link: require("../../assets/images/simulator-default.jpg").default, name: "Багатофункціональний  тренажер Kneeling Easy Chin Dip", description: "Це обладнання призначене для вправ з власною вагою, а також вправ з ваговими стеками під керівництвом тренера."},
                {id: 27, direction: "multifunction_simulators", link: require("../../assets/images/simulator-default.jpg").default, name: "Багатофункціональний тренажер Cable Stations Connector", description: "Можлива тренування одночасно п'яти чоловік з незалежним використанням вагового стека і одну людину з застосуванням вправ на мостовому з'єднанні."},
                {id: 28, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Комбінована стійка CHIN UP DIP LEG RAISE", description: "Турнік Chin Up Dip Leg Raise дає можливість задіяти в роботі фактично всі м'язові групи верхній частині тіла: підтягування широким і вузьким хватом для найширших м'язів спини, дельт, біцепсів; віджимання на брусах для трицепсів і грудних м'язів; бічні скручування для косих м'язів живота; прямі скручування, підйом ніг з упором на ліктях і підйом ніг у висі для м'язів преса."},
                {id: 29, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Універсальна стійка", description: "Підставка спеціально розроблена для зберігання штанг, грифів і канатних аксесуарів. Включає 3 опори під штанги, додаткові гачки для канатних аксесуарів і верхню платформу, що витримує вагу до 50 кг."},
                {id: 30, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Олімпійська жимова лавка від грудей під кутом", description: ""},
                {id: 31, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Олімпійська жимова лавка від грудей", description: ""},
                {id: 32, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Лавка Скотта Scott Bench", description: "Багатофункціональна лава для спеціального опрацювання рук з балансиром."},
                {id: 33, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Лавка Adjustable Bench", description: ""},
                {id: 34, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Лавка для спини Lower Back Bench", description: ""},
                {id: 35, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Горизонтальна лавка для спини/GHD Bench", description: "Універсальний тренажер для розвитку м'язів задньої поверхні стегна. Також навантаження отримують м'язи низу спини, хребта, сідничні м'язи і частково литкові м'язи. Glute Ham Developer швидко зміцнює м'язи ніг, дає можливість відпрацювати обидві основні функції м'язів задньої поверхні стегна - згинання ноги в коліні і розгинання стегна."},
                {id: 36, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Лавка для пресу Adjust Decline/Abdomin. Crunch", description: ""},
                {id: 37, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Гантелі з уритановим покриттям", description: "Гантелі з уритановим покриттям"},
                {id: 38, direction: "free_weights", link: require("../../assets/images/simulator-default.jpg").default, name: "Гантелі хромовані", description: "Нова лінія хромованих гантелей компанії Technogym. Вагові категорії гантелей: 1 - 10 кг. "}
            ]
        }
    },
    methods: {
        change(e) {
            this.isOpen = e;
        },
        openDateil(idSimulator) {
            this.simulatorDetail = this.simulators.filter((simulator) => simulator.id === idSimulator)[0];
            this.isModalOpen = true;
        }
    },
    computed: {
        directionCheck () {
            return this.simulators.filter((simulator) => simulator.direction === this.direction);
        },
    },
    components: {
        Header,
        PopupDetail,
        Footer
    }
}

</script>

<style lang="scss" scoped>
    .simulator-g {
        padding-top: 208px;
        background-color: #FFFFFF !important;
        .logo {
            background-image: url("../../assets/images/technogym-logo-black.svg");
            background-repeat: no-repeat;
            height: 84px;
            width: 310px;
            margin-bottom: 30px;
            margin-top: 20px;
            margin-left: auto;
        }
    }
    .title {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 60px;
        & > h1 {
            font-weight: 600;
            font-style: normal;
            font-family: Oswald;
            font-size: 52px;
            margin: 0;
            margin-left: 96px;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        & > p {
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            margin-bottom: 10px;
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    .simulator-direction {
        font-family: Oswald;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 27px;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 60px;
        & > .direction {
            list-style-type: none;
            display: flex;
            color: #000000;
            grid-column-gap: 40px;
            align-items: center;
            text-align: center;
            padding: 0;
            cursor: pointer;
            border-bottom: solid 2px #000000;
            & li {
                padding-bottom: 20px;
                &:hover {
                    color: #916C58;
                }
            }
        }
        .invert-color{
            color: #916C58;
        }
        & .simulator{
            list-style-type: none;
            overflow: visible;
            grid-template-columns: repeat(4, 1fr);
            grid-column-gap: 15px;
            grid-row-gap: 40px;
            display: grid;
            padding: 0;
            & li {
                cursor: pointer;
            }
            & li img {
                display:block;
                width:100%;
            }
            & li div{
                font-family: Oswald;
                font-style: normal;
                font-weight: 600;
                font-size: 18px;
                line-height: 27px;
                letter-spacing: 0.02em;
                font-feature-settings: 'pnum' on, 'lnum' on;
                color: #000000;
                padding: 10px 5px 0 5px;
            }
        }
    }
    .footer {
        height: 234px;
    }
</style>

