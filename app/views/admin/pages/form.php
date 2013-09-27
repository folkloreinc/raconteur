<?php if(isset($item)) { ?>

	<h1>Modifier une page</h1>
	<?=Form::model($item, array('route' => array('admin.pages.update',$item->id), 'method' => 'put', 'class'=>'custom')) ?>

<?php } else { ?>

	<h1>Créer une page</h1>
	<?=Form::open(array('route' => 'admin.pages.store', 'class'=>'custom'))?>

<?php } ?>

<?php if(isset($errors) && $errors->has()) { ?>
<div class="row">
	<div class="small-12 columns">
		<div class="alert-box alert">
			Votre formulaire contient des erreurs.
		</div>
	</div>
</div>
<?php } ?>

<?php
	$hasError = $errors && $errors->has('title_fr');
?>
<div class="row">
	<div class="small-12 columns">
		<?=Form::label('title_fr','Titre:',array('class'=>$hasError ? 'error':''))?>
		<?=Form::text('title_fr',null,array('class'=>$hasError ? 'error':''))?>
		<?=$hasError ? $errors->first('title_fr', '<small class="error">:message</small>'):''?>
	</div>
</div>

<?php
	$hasError = $errors && $errors->has('body_fr');
?>
<div class="row">
	<div class="small-12 columns">
		<?=Form::label('body_fr','Contenu:',array('class' => $hasError ? 'error':''))?>
		<?=Form::textarea('body_fr',null,array('class' => $hasError ? 'editor error':'editor'))?>
		<?=$hasError ? $errors->first('body_fr', '<small class="error">:message</small>'):''?>
	</div>
</div>

<hr />

<div class="row" align="right">
	<div class="small-12 columns">
		<a href="<?=URL::route('admin.pages.index')?>" class="button secondary">Annuler</a>
		<button type="submit">Enregistrer</button>
	</div>
</div>

<?=Form::close()?>