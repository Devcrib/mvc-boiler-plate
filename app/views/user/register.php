<h3> User Registration Form </h3>
<form action="" method="POST" class="form">
  <ul>
    <li>
      <label for="firstname">Firstname</label>
      <input type="text" name="firstname" id="firstname" value="<?= old('firstname'); ?>">
    </li>
    <li>
      <label for="lastname">Lastname</label>
      <input type="text" name="lastname" id="lastname" value="<?= old('lastname'); ?>">
    </li>
    <li>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="<?= old('username'); ?>">
    </li>
    <li>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="<?= old('password'); ?>">
    </li>
    <li>
      <input type="submit" value="Sign up" class="btn btn-outline-secondary">
    </li>
  </ul>
  <?php if ( isset($this->status) ): ?>
    <p class="error"><?= $this->status; ?></p>
  <?php endif; ?>
  <a href="<?= PROJECT_PATH ?>register/admin"> Go to Admin Register </a>
</form>