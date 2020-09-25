<?php  if (count($errors) > 0) : 
/*
Author: Keenan Irusan 16012269
*/
?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?> <!-- Checks errors -->
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>