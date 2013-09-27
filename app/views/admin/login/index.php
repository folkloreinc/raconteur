
<div class="row">
	<div class="small-12 large-6 large-centered columns">

		<h1 align="center">Connexion</h1>

		<?php if (Session::has('error')) { ?>
		    <div class="alert-box alert"><?=trans(Session::get('reason'))?></div>
		<?php } ?>

		<?=Form::open(array('action' => 'AdminLoginController@postLogin','method'=>'post'))?>

			<div class="row">
				<div class="small-3 columns">
					<?=Form::label('email','Email',array('class'=>'right inline'))?>
				</div>
				<div class="small-9 columns">
					<?=Form::text('email')?>
				</div>
			</div>
			<div class="row">
				<div class="small-3 columns">
					<?=Form::label('password','Mot de passe',array('class'=>'right inline'))?>
				</div>
				<div class="small-9 columns">
					<?=Form::password('password')?>
				</div>
			</div>
			<div class="row">
				<div class="small-9 push-3 columns">
					<button type="submit">Connexion</button> 
				</div>
			</div>
			
		<?=Form::close()?>

	</div>
</div>

