<?php

class AdminController extends BaseController {

	public $layout = 'layouts.admin';

	public function index()
	{

		return $this->layout->nest('content','admin.index');
	}

}