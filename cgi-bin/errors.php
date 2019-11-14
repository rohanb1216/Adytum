<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <div class = 'general-error'><?php echo $error; ?></div>
  	<?php endforeach ?>
  </div>
<?php  endif ?>