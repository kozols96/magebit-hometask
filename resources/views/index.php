<?php


use Project\Components\Session;
use Project\Components\View;
use Project\Structures\UserLoginItem;
use Project\Structures\UserRegisterItem;


/**
 * @var View $this
 * @var UserLoginItem $loginItem
 * @var UserRegisterItem $registerItem
 * @var array $error
 * @var array $errors
 */

$this->title = 'Magebit';

?>

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
    <button type="submit" @click="show = !show" class="sign-up-button">SIGN UP
    </button>
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

      <div v-if="show" key="login" class="loginForm">
          <?php if ($error): ?>

            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>

          <?php endif; ?>

        <form action="/login" method="post">
          <h1 class="login-form-header">Login</h1>
          <div class="login-form-underline"></div>
          <div class="magebit-logo">
            <img src="../../images/logo.png" alt="magebit-logo">
          </div>
          <input type="hidden"
                 name="csrf"
                 value="<?= e(Session::getInstance()->getCsrf()) ?>">
          <label class="email">Email*</label>
          <input type="email"
                 name="email"
                 value="<?= e($loginItem->email) ?>"
          >
          <label class="password">Password*</label>
          <input type="password"
                 name="password">
          <input type="submit" value="LOGIN">
          <input type="submit" class="forgot" value="Forgot?">
        </form>
      </div>

      <div v-else key="signUp" class="signUpForm">

          <?php if (!empty($errors)): ?>

            <div class="alert alert-danger" role="alert">
              <ul class="mb-0">
                  <?php foreach ($errors as $err): ?>
                    <li><?= e($err) ?></li>
                  <?php endforeach; ?>
              </ul>
            </div>

          <?php endif; ?>

        <form action="/register" method="post">
          <h1 class="sign-up-form-header">Sign Up</h1>
          <div class="sign-up-form-underline"></div>
          <div class="magebit-logo-2">
            <img src="../../images/logo.png" alt="logo">
          </div>
          <input type="hidden"
                 name="csrf"
                 value="<?= e(Session::getInstance()->getCsrf()) ?>">
          <label class="name">Name*</label>
          <input type="text"
                 name="name"
                 value="<?= e($registerItem->name) ?>"
          >
          <label class="email">Email*</label>
          <input type="email"
                 name="email"
                 value="<?= e($registerItem->email) ?>"
          >
          <label class="password">Password*</label>
          <input type="password"
                 name="password">
          <input type="submit" value="SIGN UP">
        </form>
      </div>

    </transition>
  </div>
</div>