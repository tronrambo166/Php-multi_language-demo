<?php

define("_REGISTER", "Register");
define("_NAME", "Name");
define("_USERNAME", "Username");
define("_EMAIL", "Email");
define("_ADDRESS", "Address");
define("_SUBMIT", "Submit");
?>









 <h1 class="d-block text-center"><?= _REGISTER ?></h1>
 <form method='post'  class="w-100" action=''>
  <?= _NAME ?> : <input class="form-control" type='text' name='name' /><br>
  <?= _USERNAME ?> : <input class="form-control" type='text' name='username' /><br>
  <?= _EMAIL ?> : <input class="form-control"type='text' name='email' /><br>
  <?= _ADDRESS ?> : <input class="form-control"type='text' name='address' /><br>
  <input type='submit' class="form-control"value='<?= _SUBMIT ?>'>
 </form>
 
 