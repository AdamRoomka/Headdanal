<?php  if (count($errorsLogin) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorsLogin as $errorLogin) : ?>
		<p style="margin: 0; position: absolute; top: 90px; left: 60px;" class="text-danger"><?php echo $errorLogin ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>