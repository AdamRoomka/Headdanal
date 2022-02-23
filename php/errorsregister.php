<?php  if (count($errorsRegister) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorsRegister as $errorRegister) : ?>
		<p style="margin: 0; position: absolute; top: 90px; left: 60px;" class="text-danger"><?php echo $errorRegister ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>