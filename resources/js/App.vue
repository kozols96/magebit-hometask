<template>
  <div id="app">
    <div class="login-sign-up-box">
      <transition name="fade" mode="out-in">
        <div v-if="show" key="signUp" class="sign-up-container">
          <h1>Don't have an account?</h1>
          <div class="sign-up-underline"></div>
          <p>
            Lorem ipsum dolor sit amet,<br/>
            consectetur adipisicing elit, sed do<br/>
            eiusmod tempor incididunt ut labore et<br/>
            dolore magma aliqua
          </p>
            <a href="/sign-up" @click="show = !show" class="sign-up-button">SIGN UP
            </a>
        </div>
        <div v-else key="login" class="login-container">
          <h1 class="login-header">
            Have an account?
          </h1>
          <div class="login-underline">
          </div>
          <p class="login-paragraph">
            Lorem ipsum dolor sit amet consectetur<br/> adipisicing elit.
          </p>
          <button type="submit" @click="show = !show" class="login-button">LOGIN
          </button>
        </div>
      </transition>
      <div :class="{slided: show === false}" class="slide">
        <div class="login-sign-up-form">
          <transition name="fade" mode="out-in">

          </transition>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {
      show: true,
    }
  }
}
</script>