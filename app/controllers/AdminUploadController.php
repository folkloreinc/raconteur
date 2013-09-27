<?php

class AdminUploadController extends BaseController {

	public $layout = null;

	public function postPhoto()
	{

		if(Input::hasFile('file')) {
			$photo = Photo::upload(Input::file('file'));
			return array(
				'success' => true,
				'response' => $photo->toArray()
			);
		}

		return array(
			'success' => false
		);
	}

}