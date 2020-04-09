<?php

namespace App;

class PostCardService 
{

	protected $country;
	protected $width;
	protected $height;

	public function __construct($country,$width,$height) {
		$this->country = $country;
		$this->width = $width;
		$this->height = $height;
	}


	public function send($message,$to) {

		dump('Message is sending to : '.$to.' with this message : '.$message);
	}
}