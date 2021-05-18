<template>
  <div class="selectLang">
    <button
      href="#"
      class="buttonLang"
      @click="toggleVisibility"
      @keydown.space.exact.prevent="toggleVisibility"
      @keydown.esc.exact="hideDropdown"
      @keydown.shift.tab="hideDropdown"
      @keydown.up.exact.prevent="startArrowKeys"
      @keydown.down.exact.prevent="startArrowKeys"
    >
      {{ $i18n.locale.toUpperCase() }}
    </button>
    <transition name="dropdown-fade">
      <ul v-click-away="hideDropdown" v-if="isVisible" ref="dropdown" class="chooseLang">
        <li>
          <a
            href="#"
            @click.prevent="setLocale('ua')"
            ref="account"
            @keydown.up.exact.prevent=""
            @keydown.tab.exact="focusNext(false)"
            @keydown.down.exact.prevent="focusNext(true)"
            @keydown.esc.exact="hideDropdown"
          >
            <span>UA</span>
          </a>
        </li>
        <li>
          <a
            href="#"
            @click.prevent="setLocale('ru')"
            @keydown.shift.tab="focusPrevious(false)"
            @keydown.up.exact.prevent="focusPrevious(true)"
            @keydown.down.exact.prevent=""
            @keydown.tab.exact="hideDropdown"
            @keydown.esc.exact="hideDropdown"
          >
            <span>RU</span>
          </a>
        </li>
      </ul>
    </transition>
  </div>
</template>

<script>
import { mixin as VueClickAway } from 'vue3-click-away'
export default {
  mixins: [VueClickAway],
  data() {
    return {
      isVisible: false,
      focusedIndex: 0,
    }
  },
  methods: {
    toggleVisibility() {
      this.isVisible = !this.isVisible
    },
    hideDropdown() {
      this.isVisible = false
      this.focusedIndex = 0
    },
    startArrowKeys() {
      if (this.isVisible) {
        // this.$refs.account.focus()
        this.$refs.dropdown.children[0].children[0].focus()
      }
    },
    focusPrevious(isArrowKey) {
      this.focusedIndex = this.focusedIndex - 1
      if (isArrowKey) {
        this.focusItem()
      }
    },
    focusNext(isArrowKey) {
      this.focusedIndex = this.focusedIndex + 1
      if (isArrowKey) {
        this.focusItem()
      }
    },
    focusItem() {
      this.$refs.dropdown.children[this.focusedIndex].children[0].focus()
    },
    setLocale(locale) {
      this.$i18n.locale = locale
      this.$router.push({
        params: { lang: locale }
      })
      this.hideDropdown()
    }
  }
}
</script>

<style lang="scss" scoped>
    .selectLang {
        position: relative;
        transition: all 0.2s ease;
    }
    .buttonLang {
        width: 31px;
        height: 16px;
        font-family: Raleway;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 16px;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        color: currentColor;
        background: transparent;
        padding: 0 5px;
        border-left: solid 2px #916C58;
        transform: unset;
        &>span{
            transform: unset;
        }
        &:hover{
            filter: none;
            color: #916C58;
        }
    }
    .chooseLang {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 16px;
        letter-spacing: 0.05em;
        position: absolute;
        width: 21px;
        text-transform: uppercase;
        list-style-type: none;
        background: #000000;
        border-left: solid 2px #916C58;
        padding: 10px 5px;
        margin-top: 9px;
        & li{
            opacity: 0.45;
            &:hover {
                opacity: 1;
            }
        }
    }

    .dropdown-fade-enter-active, .dropdown-fade-leave-active {
        transition: all 0.2s ease-in-out;
    }

  .dropdown-fade-ente-to, .dropdown-fade-leave-to {
    opacity: 0;
    transform: translateY(-12px);
  }
</style>
