<div class="error">
<?php  if (count($errors) > 0) : ?>
	<script>document.querySelector('.error').style.display="flex"</script>
	<div class="alertPopup">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
<script>document.querySelector('.error').addEventListener('click', () =>
{
	document.querySelector('.error').style.display="none"
})
</script>
</div>
