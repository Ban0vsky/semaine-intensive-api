<div class="error">
	<?php  if (!empty($errors)) : ?>
		<script>document.querySelector('.error').style.display="flex"</script>
		<div class="alertPopup">
			<?php foreach ($errors as $error) : ?>
				<p><?php echo $error ?></p>
			<?php endforeach ?>
		</div>
	<?php  endif ?>
	<?php $errors=[] ?>
	<script>document.querySelector('.error').addEventListener('click', () =>
		{
			document.querySelector('.error').style.display="none"
		})
	</script>
</div>
