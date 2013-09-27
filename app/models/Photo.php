<?php



class Photo extends Eloquent {

	protected $table = 'photos';

	protected $guarded = array();
	protected $fillable = array('imageable_order','imageable_position','filename','original','mime','size','width','height');

	protected static $extensions = array(
		'image/jpeg' => 'jpg',
		'image/jpg' => 'jpg',
		'image/png' => 'png',
		'image/x-png' => 'png',
		'image/gif' => 'gif',
		'image/x-gif' => 'gif'
	);

	public function imageable() {

		return $this->morphTo();

	}

	public static function upload($file) {

		//Get infos
		list($width, $height, $type, $attr) = getimagesize($file->getRealPath());
		$original = $file->getClientOriginalName();
		$mime = $file->getMimeType();
		$size = $file->getSize();

		//Create item
		$item = new self();
		$item->fill(array(
			'original' => $original,
			'mime' => $mime,
			'size' => $size,
			'width' => $width,
			'height' => $height
		));
		$item->save();

		//Get destination
		$destinationPath = public_path().'/files/photos';
		$folder = date('Y-m-d');
		$extension = self::$extensions[$mime];
		$filename = $item->id.'.'.$extension;

		//Create directory if doesn't exist
		if(!file_exists($destinationPath.'/'.$folder)) {
			mkdir($destinationPath.'/'.$folder, 0775, true);
		}

		//Move file
		$file->move($destinationPath.'/'.$folder, $filename);

		//Fix permissions problem in local
		if(App::environment() == 'local') {
			chmod($destinationPath.'/'.$folder.'/'.$filename,0777);
		}

		//Save filename
		$item->fill(array(
			'filename' => $folder.'/'.$filename
		));
		$item->save();

		return $item;

	}


}