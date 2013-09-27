<?php

class AdminLoginController extends BaseController {

	public $layout = 'layouts.admin';

	public function __construct() {

		$this->beforeFilter('guest', array(
			'except' => array(
				'getLogout'
			)
		));

	}

	public function getIndex()
	{

		return $this->layout->nest('content','admin.login.index');
	}

	public function postLogin()
	{

		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended(URL::action('AdminController@index'));
		}
		return Redirect::action('AdminLoginController@getIndex');
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::route('home');
	}

	public function getForgot()
	{
		return $this->layout->nest('content','admin.login.forgot');
	}

	public function postForgot()
	{
		$credentials = array('email' => Input::get('email'));

    	return Password::remind($credentials, function($message, $user)
		{
		    $message->subject('Your Password Reminder');
		});
	}

	public function getReset($token)
	{
		return $this->layout->nest('content','admin.login.reset',array(
			'token'=> $token
		));
	}

	public function postReset() {

		$credentials = array('email' => Input::get('email'));

	    return Password::reset($credentials, function($user, $password)
	    {
	        $user->password = $password;
	        $user->save();

	        return Redirect::route('admin');
	    });

	}

}