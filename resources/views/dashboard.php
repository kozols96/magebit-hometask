<?php

use Project\Components\ActiveUser;
use Project\Components\View;

/**
 * @var View $this
 * @var ActiveUser $user
 */

?>

<div class="loginForm">
  <h1>Welcome to Dashboard, <?= e($user->name) ?></h1>
</div>
