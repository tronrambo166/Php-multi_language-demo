<?php

define("_REGISTER", "Resiccion");
define("_NAME", "Nombre");
define("_USERNAME", "UcerNombre");
define("_EMAIL", "Emel");
define("_ADDRESS", "Adrecion");
define("_SUBMIT", "Sabmicion");
?>



<h1 class="d-block text-center"><?= _REGISTER ?></h1>
 <form method='post'  class="w-100" action=''>
  <?= _NAME ?> : <input class="form-control" type='text' name='name' /><br>
  <?= _USERNAME ?> : <input class="form-control" type='text' name='username' /><br>
  <?= _EMAIL ?> : <input class="form-control"type='text' name='email' /><br>
  <?= _ADDRESS ?> : <input class="form-control"type='text' name='address' /><br>
  <input type='submit' class="form-control"value='<?= _SUBMIT ?>'>
 </form>
 