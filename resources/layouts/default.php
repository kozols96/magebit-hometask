<?php

use Project\Components\ActiveUser;
use Project\Components\Session;
use Project\Components\View;

/**
 * @var View $this
 */

?>

<head>
  <title><?= $this->title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/assets/style.css" rel="stylesheet">
  <script>
      window.csrf = "<?= e(Session::getInstance()->getCsrf()); ?>"
  </script>
</head>
<body>
<div id="app">
  <div class="login-sign-up-box">
      <?php if (ActiveUser::isLoggedIn()): ?>

        <a class="dashboard-button" href="/dashboard">Dashboard</a>

        <a class="logout-button" href="/logout"
           onclick="onLogoutClicked()">LOGOUT</a>

        <form id="js--logout-form" action="/logout" method="post">
          <input type="hidden" name="csrf" value="<?= e(Session::getInstance()->getCsrf()) ?>">
        </form>
      <?php endif; ?>
      <?= $this->content ?>

  </div>
</div>
<script>
    function onLogoutClicked() {
        event.preventDefault();
        document.getElementById('js--logout-form').submit();
    }
</script>
<script src="/assets/script.js"></script>
</body>
