<?php if( !defined('CORE') ) { die('403'); } ?>

<form method="POST" action="">

	<h2>Content</h2>

	<?php if( empty($vars['fields']) ): ?>

		<div class="alert alert-info">No Fields.</div>
		<div class="buttons">
			<?php echo Utils::render(
				'elements/button_green.php',
				 array(
				 	'text' => 'Add Field',
				 	'title' => 'Go to adding a new Field.',
				 	'url' => Utils::getLink('cms/add-field/')
				 )
			); ?>
		</div>

	<?php else: ?>

		<div class="buttons">
			<?php echo Utils::render(
				'elements/button_blue.php',
				 array('text' => 'Save', 'title' => 'Save all Fields.')
			); ?>
			<?php echo Utils::render(
				'elements/button_green.php',
				 array(
				 	'text' => 'Add Field',
				 	'title' => 'Go to adding a new Field.',
				 	'url' => Utils::getLink('cms/add-field/')
				 )
			); ?>
		</div>

		<?php echo Utils::render(
			"fields/fields_group.php",
			$vars);
		?>

		<div class="buttons">
			<?php echo Utils::render(
				'elements/button_blue.php',
				 array('text' => 'Save', 'title' => 'Save all Fields.')
			); ?>
			<?php echo Utils::render(
				'elements/button_green.php',
				 array(
				 	'text' => 'Add Field',
				 	'title' => 'Go to adding a new Field.',
				 	'url' => Utils::getLink('cms/add-field/')
				 )
			); ?>
		</div>

	<?php endif; ?>

</form>

<a href="#" class="scroll-to-top" title="Scroll to Top.">
	<img src="<?=Utils::getLink('web/_cms/img/icon-up-black.png');?>" alt="Scroll to Top">
</a>