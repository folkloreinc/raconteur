<?php

class HomeController extends BaseController {

	public function index()
	{
		return $this->layout->nest('content','home');
	}

}