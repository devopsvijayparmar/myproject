<?php

namespace App\Traits;

trait ImageUpload {

    public function imageUpload($file,$path)
    {
		$name = $file->getClientOriginalName();
		$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
		$file->move(public_path() . '/uploads/' .$path .'/', $name);
		return $name;
    }

}