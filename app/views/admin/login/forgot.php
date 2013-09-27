<h1>Reset password</h1>

<?php if (Session::has('error')) { ?>
    <div class="alert-box alert"><?=trans(Session::get('reason'))?></div>
<?php } else if (Session::has('success')) { ?>
    <div class="alert-box success">An e-mail with the password reset has been sent.</div>
<?php } ?>

<?=Form::open(array('action' => 'AdminLoginController@postForgot','method'=>'post'))?>

<div class="row">
	<div class="small-6">
		<div class="row">
			<div class="small-3 columns">
				<?=Form::label('email','Email',array('class'=>'right inline'))?>
			</div>
			<div class="small-9 columns">
				<?=Form::text('email')?>
			</div>
		</div>
		<div class="row">
			<div class="small-9 push-3 columns">
				<a href="<?=URL::action('AdminLoginController@getIndex')?>" class="button secondary">Cancel</a>
				<button type="submit">Reset</button> 
			</div>
		</div>
	</div>
</div>


<?=Form::close()?>