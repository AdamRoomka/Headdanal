<?php  if (count($errorsRegister) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorsRegister as $errorRegister) : ?>
		<p class="text-danger text-center"><?php echo $errorRegister ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>