<?php

class AdminPagesController extends \BaseController {

	protected $layout = 'layouts.admin';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Page::orderBy('id','asc')->get();

		return $this->layout->nest('content','admin.pages.index',array(
			'items' => $items
		));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return $this->layout->nest('content','admin.pages.form');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Page::find($id);

		return $this->layout->nest('content','admin.pages.form',array(
			'item' => $item
		));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->update(null);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$input = Input::all();

		$isNew = true;
		if($id) {
			$item = Page::find($id);
			$isNew = false;
			if(!$item) return App::abort(404);
		} else {
			$item = new Page();
		}

		$validator = Validator::make($input,array(
			'title_fr' => array('required')
		));
		if($validator->fails()) {
			$redirect = $isNew ? Redirect::route('admin.pages.create'):Redirect::route('admin.pages.edit',array($id));
		    return $redirect->withInput()->withErrors($validator);
		}

		$item->fill($input);
		$item->save();

		return Redirect::route('admin.pages.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}