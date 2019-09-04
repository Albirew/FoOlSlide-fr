<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed'); ?>

<div class="large comic alert">
	<h1 class="title">
		<?php echo $comic->name; ?>
	</h1>
	<div class="info">
		<?php echo _('Cette série contient du contenu pour adulte et est destinée à être visionnée par un public majeur.<br/>	Si vous êtes majeur, cliquez sur Continuer.'); ?>
		<br/>
		<br/>
		<a href="<?php echo site_url() ?>">Retourner sur la page d'accueil</a> ou 
		<?php 
			echo form_open('','',array('adult' => 'true'));
			echo form_submit('', _('Continuer'));
			echo form_close();
		?>
	</div>
</div>
