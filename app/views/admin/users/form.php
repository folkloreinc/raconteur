<?php if(isset($item)) { ?>

	<h1>Modifier un utilisateur</h1>
	<?=Form::model($item, array('route' => array('admin.users.update',$item->id), 'method' => 'put', 'class'=>'custom')) ?>

<?php } else { ?>

	<h1>Créer un utilisateur</h1>
	<?=Form::open(array('route' => 'admin.users.store', 'class'=>'custom'))?>

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
	$hasError = $errors && $errors->has('email');
?>
<div class="row">
	<div class="small-3 columns">
		<?=Form::label('email','Email:',array('class'=>$hasError ? 'right inline error':'right inline'))?>
	</div>
	<div class="small-6 pull-3 columns">
		<?=Form::text('email',null,array('class'=>$hasError ? 'error':''))?>
		<?=$hasError ? $errors->first('email', '<small class="error">:message</small>'):''?>
	</div>
</div>

<?php
	$hasError = $errors && $errors->has('password');
?>
<div class="row">
	<div class="small-3 columns">
		<?=Form::label('password','Mot de passe:',array('class'=>$hasError ? 'right inline error':'right inline'))?>
	</div>
	<div class="small-4 pull-5 columns">
		<?=Form::password('password',array('class'=>$hasError ? 'error':''))?>
		<?=$hasError ? $errors->first('password', '<small class="error">:message</small>'):''?>
	</div>
</div>

<?php
	$hasError = $errors && $errors->has('password_confirmation');
?>
<div class="row">
	<div class="small-3 columns">
		<?=Form::label('password_confirmation','Confirmer le mot de passe:',array('class'=>$hasError ? 'right inline error':'right inline'))?>
	</div>
	<div class="small-4 pull-5 columns">
		<?=Form::password('password_confirmation',array('class'=>$hasError ? 'error':''))?>
		<?=$hasError ? $errors->first('password_confirmation', '<small class="error">:message</small>'):''?>
	</div>
</div>

<hr />

<div class="row" align="right">
	<div class="small-12 columns">
		<a href="<?=URL::route('admin.users.index')?>" class="button secondary">Annuler</a>
		<button type="submit">Enregistrer</button>
	</div>
</div>

<?=Form::close()?>