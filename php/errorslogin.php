<?php  if (count($errorsLogin) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorsLogin as $errorLogin) : ?>
		<p class="text-danger text-center"><?php echo $errorLogin ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>